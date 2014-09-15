<?php

namespace React\Filesystem;

trait SharedTrait {
    public function stat() {
        return $this->filesystem->stat($this->getPath());
    }

    public function chmod($mode) {
        return $this->filesystem->chmod($this->getPath(), $mode);
    }

    public function chown($uid = -1, $guid = -1) {
        return $this->filesystem->chown($this->getPath(), $uid, $guid);
    }
}