<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
    ];

    /**
     * 画像ファイル取得
     * @return json
     */
    public function get()
    {
        return $this->all();
    }

    /**
     * 画像ファイル保存
     * @param string $fileName
     * @param string $filePath
     */
    public function set($fileName, $filePath)
    {
        $this->file_name = $fileName;
        $this->file_path = $filePath;
        $this->save();
    }
}
