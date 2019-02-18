<?php

if (!function_exists('getCurrentGitCommit')) {
    function getCurrentGitCommit()
    {
        $commitHash = trim(exec('git log --pretty="%h" -n1 HEAD'));

        $commitDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci HEAD')));
        $commitDate->setTimezone(new \DateTimeZone('Europe/Madrid'));

        return sprintf('#%s - (%s)', $commitHash, $commitDate->format('d/m/Y H:i:s'));
    }
}
