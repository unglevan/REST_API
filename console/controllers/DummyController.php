<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phamvanhung
 * Date: 14/12/19
 * Time: 17:35
 * To change this template use File | Settings | File Templates.
 */
namespace console\controllers;

use yii\console\Controller;
use common\models\SpVideo;
use common\models\SpApp;
use common\models\SpTag;

class DummyController extends Controller {

    public function actionIndex() {

        for($i=0;$i<=10;$i++){
            $app = new SpApp();
            $app->app_id = rand(1,100);
            $app->country = rand(1,2)?"jp":"cn";
            $app->publisher ="hung dep trai".rand(1,100);
            $app->description ="hung dep trai".rand(1,100);
            $app->published_at= date("Y-m-d");
            $app->app_name = "spicemart chanel".rand(1,100);
            $app->app_icon = "http://www.appguru.com.tw/appguru/wp-content/uploads/2014/07/126.jpg";
            $app->save();
            $this->actionVideo($app->id);
        }


    }

    public function actionVideo($app_id) {
        for($i=0;$i<=10;$i++){
            $video = new SpVideo();
            $video->file_name="sonsan.mp4";
            $video->mp4_path="http://localhost:9000/videos/sonsan.mp4";
            $video->ogg_path="http://localhost:9000/videos/sonsan.ogg";
            $video->webm_path="http://localhost:9000/videos/sonsan.webm";
            $video->created_at= date("Y-m-d");
            $video->description="Hung dep trai".rand(1,100);
            $video->thumbnail_path="http://i1.2pcdn.com/node14/image/game/52df4522c01d191c6ce68bbd/52df60a7c01d191c6ce6983e/20140122011750a0doufuvuvks99kq.png";
            $video->poster_path="http://www.videogular.com/assets/images/videogular.png";
            $video->sp_app_id=$app_id;
            $video->title="Hung dep trai".rand(1,100);
            $video->save();
            $this->actionTag($video->id);
        }
    }

    public function actionTag($video_id) {
        for($i=0;$i<=10;$i++){
            $tag = new SpTag();
            $tag->sp_video_id = $video_id;

            $tag->time = rand(1,100);
            $tag->value = "hung dep trai".rand(1,100);
            $tag->tag_order = rand(1,100);
            $tag->save();
        }
    }

    public function actionApp() {
        for($i=0;$i<=100;$i++){
            $app = new SpApp();
            $app->app_id = rand(1,100);
            $app->country = rand(1,2)?"jp":"cn";
            $app->publisher ="hung dep trai".rand(1,100);
            $app->description ="hung dep trai".rand(1,100);
            $app->published_at= date("Y-m-d");
            $app->app_name = "spicemart chanel".rand(1,100);
            $app->app_icon = "http://www.appguru.com.tw/appguru/wp-content/uploads/2014/07/126.jpg";
            $app->save();

        }
    }



    public function actionMail($to) {
        echo "Sending mail to " . $to;
    }

}
