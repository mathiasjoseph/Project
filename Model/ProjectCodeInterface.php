<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 15/11/16
 * Time: 01:08
 */

namespace Miky\Component\Project\Model;


interface ProjectCodeInterface
{
    const TYPE_GIT = "git";

    const TYPE_FTP = "ftp";

    const TYPE_SFTP = "sftp";

    const TYPE_WEBSITE = "website";

}