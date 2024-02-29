<?php

namespace App\Traits;

trait Pagination {
    protected $limit, $page, $dataTotal, $pageTotal, $paginationList = array(), $visibleList = array();

    public function setPagination($dataTotal, $pageTotal = 1) {
        $this->dataTotal = $dataTotal;
        $this->pageTotal = $pageTotal;
        for($i = 0; $i < $pageTotal; $i++) {
            $this->paginationList[$i] = ($i + 1);
        }
    }

    public function setList($page, $limit) {

        $this->limit = $limit;
        $this->page = $page;
        $tempList = array();

        foreach ($this->paginationList as $key => $value) {
            $tempList[$key]['number'] = $value;
            if ($value == $page) {
                $tempList[$key]['active'] = true;
            } else {
                $tempList[$key]['active'] = false;
            }
        }

        $this->visibleList = $this->visibleList($tempList);
    }

    public function visibleList ($tempList) {
        $finalList = array();
        $activeKey = array_search(true, array_column($tempList, 'active'));

        foreach ($tempList as $key => $value) {
            if ($key == ($activeKey - 1) || $key == $activeKey || $key == ($activeKey + 1)) {
                $finalList[$key]['number'] = $value['number'];
                $finalList[$key]['active'] = $value['active'];
            } else {
                if ($key < $activeKey) {
                    $finalList[$key]['number'] = 0;
                } else {
                    $finalList[$key]['number'] = -1;
                }
                $finalList[$key]['active'] = false;
            }
        }

        return $this->array_unique_multi($finalList, 'number');
    }

    public function array_unique_multi($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }

        return $temp_array;
    }

    public function render() {
        $start = ($this->page - 1) * $this->limit + 1;
        $end = $this->page * $this->limit;
        if ($end > $this->dataTotal) {
            $end = $this->dataTotal;
        }
        $view = view('components.template.pagination', ['start' => $start, 'end' => $end, 'limit' => $this->limit, 'page' => $this->page, 'dataTotal' => $this->dataTotal, 'pageTotal' => $this->pageTotal, 'paginationList' => $this->paginationList, 'visibleList' => $this->visibleList])->render();
        return $view;
    }

    public function check() {
        dd(['limit' => $this->limit, 'page' => $this->page, 'dataTotal' => $this->dataTotal, 'pageTotal' => $this->pageTotal, 'paginationList' => $this->paginationList, 'visibleList' => $this->visibleList]);
    }
}