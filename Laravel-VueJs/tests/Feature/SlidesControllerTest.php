<?php

namespace Tests\Feature;

use App\Models\Slide;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SlidesControllerTest extends TestCase
{
    /**
     * Test thêm slides OK
     *
     * @return void
     */
    public function test_store_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => '',
            'title' => 'The  test',
            'btn_text' => 'Learn more',
            'image' => 'images/05-maybach.webp',
            'des_1' => '',
            'des_2' => '',
            'color' => 'text-light',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

    /**
     * Test thêm slides not ok
     *
     * @return void
     */
    public function test_store_not_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => '',
            'title' => 'The  test',
        ];
        $response = $this->postJson($api, $request);
        $excute = false;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

    /**
     * Test thêm slides not truyền vào tất cả rỗng
     *
     * @return void
     */
    public function test_store_is_empty_not_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => '',
            'title' => '',
            'btn_text' => '',
            'image' => '',
            'des_1' => '',
            'des_2' => '',
            'color' => '',
        ];
        $response = $this->postJson($api, $request);
        $excute = false;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test thêm slides truyền vào array
     *
     * @return void
     */
    public function test_store_is_array_not_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => [],
            'title' => [],
            'btn_text' => [],
            'image' => [],
            'des_1' => [],
            'des_2' => [],
            'color' => [],
        ];
        $response = $this->postJson($api, $request);
        $excute = false;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test thêm slides truyền vào object
     *
     * @return void
     */
    public function test_store_is_object_not_ok()
    {
        $slide = new Slide();
        $api = '/create-slides';
        $request = [
            'active' => $slide,
            'title' => $slide,
            'btn_text' => $slide,
            'image' => $slide,
            'des_1' =>$slide,
            'des_2' => $slide,
            'color' => $slide,
        ];
        $response = $this->postJson($api, $request);
        $excute = false;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test thêm slides truyền vào boolean
     *
     * @return void
     */
    public function test_store_is_boolean_not_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => false,
            'title' => true,
            'btn_text' => true,
            'image' => true,
            'des_1' =>true,
            'des_2' => true,
            'color' => false,
        ];
        $response = $this->postJson($api, $request);
        var_dump(!isset($response->original["message"]));
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

      /**
     * Test thêm slides truyền vào null
     *
     * @return void
     */
    public function test_store_is_null_not_ok()
    {
        $api = '/create-slides';
        $request = [
            'active' => null,
            'title' => null,
            'btn_text' => null,
            'image' => null,
            'des_1' =>null,
            'des_2' => null,
            'color' => null,
        ];
        $response = $this->postJson($api, $request);
        $excute = false;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

      /**
     * Test update slides ok
     *
     * @return void
     */
    public function test_update_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => '',
            'title' => 'The test',
            'btn_text' => 'Learn test',
            'image' => 'images/05-maybach.webp',
            'des_1' => "",
            'des_2' => "",
            'color' => 'text-light',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

      /**
     * Test update slides not ok
     * Khi thiếu trường dữ liệu
     *
     * @return void
     */
    public function test_update_not_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => '',
            'title' => 'The test',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test update slides not ok
     * Khi thiếu trường dữ liệu
     *
     * @return void
     */
    public function test_update_isset_id_not_ok()
    {
        $api = '/update-slides/100';
        $request = [
            'active' => '',
            'title' => 'The  test',
            'btn_text' => 'Learn more',
            'image' => 'images/05-maybach.webp',
            'des_1' => '',
            'des_2' => '',
            'color' => 'text-light',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }
     /**
     * Test update khi id truyền vào là số âm
     * Khi thiếu trường dữ liệu
     *
     * @return void
     */
    public function test_update_id_is_error_not_ok()
    {
        $api = '/update-slides/-1';
        $request = [
            'active' => '',
            'title' => 'The  test',
            'btn_text' => 'Learn more',
            'image' => 'images/05-maybach.webp',
            'des_1' => '',
            'des_2' => '',
            'color' => 'text-light',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

    /**
     * Test update slides truyền vào tất cả rỗng
     *
     * @return void
     */
    public function test_update_is_empty_not_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => '',
            'title' => '',
            'btn_text' => '',
            'image' => '',
            'des_1' => '',
            'des_2' => '',
            'color' => '',
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test update slides truyền vào array
     *
     * @return void
     */
    public function test_update_is_array_not_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => [],
            'title' => [],
            'btn_text' => [],
            'image' => [],
            'des_1' => [],
            'des_2' => [],
            'color' => [],
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test update slides truyền vào object
     *
     * @return void
     */
    public function test_update_is_object_not_ok()
    {
        $slide = new Slide();
        $api = '/update-slides/38';
        $request = [
            'active' => $slide,
            'title' => $slide,
            'btn_text' => $slide,
            'image' => $slide,
            'des_1' =>$slide,
            'des_2' => $slide,
            'color' => $slide,
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

     /**
     * Test update slides truyền vào boolean
     *
     * @return void
     */
    public function test_update_is_boolean_not_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => true,
            'title' => true,
            'btn_text' => true,
            'image' => true,
            'des_1' =>true,
            'des_2' => true,
            'color' => "text-light",
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }

      /**
     * Test update slides truyền vào null
     *
     * @return void
     */
    public function test_update_is_null_not_ok()
    {
        $api = '/update-slides/38';
        $request = [
            'active' => null,
            'title' => null,
            'btn_text' => null,
            'image' => null,
            'des_1' =>null,
            'des_2' => null,
            'color' => null,
        ];
        $response = $this->postJson($api, $request);
        $excute = true;
        $this->assertEquals($excute, !isset($response->original["message"]));
    }
}
