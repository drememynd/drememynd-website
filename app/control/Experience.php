<?php
namespace App\Control;

use Engine\Engine\Control;
use Engine\Utility\Ini;

/**
 * Description of Experience
 *
 * @author drememynd
 */
class Experience extends Control
{

    protected function init()
    {

    }

    public function index($params = [])
    {
        $jobList = __DIR__ . _DS . 'jobs.ini';
        $jobs = Ini::parse($jobList);

        foreach ($jobs as &$company) {
            foreach ($company['jobs'] as &$job) {

                if (!empty($job['desc'])) {
                    ksort($job['desc']);
                }
            }
        }

        return ['jobs' => $jobs];
    }
}
