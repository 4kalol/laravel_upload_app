<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Carbon\Carbon;
use Exception;

class ImageController extends Controller
{
    public function __construct(private Image $image)
    {

    }

    /**
     * 画像ファイル取得用のAPI
     * @return json
     */
    public function get()
    {
        return response()->json($this->image->get());
    }

    /**
     * 画像ファイルアップロード用のAPI
     * @param Request $request
     * @return json
     */
    public function upload(Request $request)
    {
        // ①ファイル名を取得し、一意の名前を生成
        $originalFileName = $request->file('file')->getClientOriginalName();
        $fileName = Carbon::now()->format('Y-m-d_H:i:s') . '_' . $originalFileName;

        // ②storageに保存
        $filePath = $request->file('file')->storeAs('images', $fileName);

        // ③公開ディレクトリ側のファイルパスを取得
        $publicFilePath = asset('storage/images/' . $fileName);

        // ④テーブルに保存
        try {
            $this->image->set($fileName, $publicFilePath);
            return response()->json(['message' => 'ok']);
        } catch (Exception $e) {
            return response()->json(['message' => 'ng']);
        }
    }
}
