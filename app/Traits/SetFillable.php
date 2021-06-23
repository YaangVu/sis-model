<?php


namespace YaangVu\SisModel\App\Traits;


trait SetFillable
{
    protected $fillable = [];

    public function setFillable($fillable): static
    {
        $this->fillable = $fillable;

        return $this;
    }
}
