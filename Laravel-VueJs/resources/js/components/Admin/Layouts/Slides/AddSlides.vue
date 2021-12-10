<template>
    <b-container class="my-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="text-align: center">
                <h3 class="font-weight-bold text-primary">Add Slides</h3>
            </div>
            <div class="card-header link-header py-2">
                <b-link
                    class="font-weight-bold text-primary"
                    href="/admin/slides"
                    ><i class="fas fa-angle-double-left"></i> Quay lại List
                    slides</b-link
                >
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <!-- Hiên thị thông báo lỗi khi người dùng nhập sai -->
                    <div class="alert alert-success text-center" v-if="check"
                        ><span>!!! Thêm Slides thành công !!!</span></div>
                    <div  class="error alert alert-danger text-center shadow" v-if="errors.length">
                        <span v-for="(err, index) of errors" :key="index">
                            {{ err }}
                        </span>
                    </div>
                    <!-- Kết thúc hiển thị thông báo lỗi -->
                    <div class="form-group">
                        <label for="sTitle">Tiêu đề</label>
                        <input
                            type="text"
                            class="form-control"
                            id="sTitle"
                            name="title"
                            v-model="slides.title"
                        />
                    </div>
                    <div class="form-group">
                        <label for="sImage">Hình Ảnh</label>
                        <input
                            type="file"
                            class="form-control"
                            id="sImage"
                            name="image"
                            accept="image/png, .jpeg, .jpg, image/gif, .webp"
                            @change="handleOnchange"
                        />
                    </div>
                    <div class="form-group">
                        <label for="sDescription">Name Link</label>
                        <input
                            type="text"
                            class="form-control"
                            id="sNameLink"
                            name="btn_text"
                            v-model="slides.btn_text"
                        />
                    </div>
                    <div class="form-group">
                        <label for="sDescription">Mô tả 1</label>
                        <textarea
                            type="text"
                            class="form-control"
                            id="sDescription1"
                            name="des_1"
                            v-model="slides.des_1"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sLink">Mô tả 2</label>
                        <textarea
                            type="text"
                            class="form-control"
                            id="sDescription2"
                            name="des_2"
                            v-model="slides.des_2"
                        ></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sStatus">Status</label>
                                <select
                                    class="form-control"
                                    id="sStatus"
                                    name="active"
                                    v-model="slides.active"
                                >
                                    <option value="">Mặc định</option>
                                    <option value="active">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sActive">Màu chữ tiêu đề</label>
                                <select
                                    class="form-control"
                                    id="sActive"
                                    name="color"
                                    v-model="slides.color"
                                >
                                    <option disabled value="">
                                        --- Mời bạn chọn ---
                                    </option>
                                    <option value="text-light">Trắng</option>
                                    <option value="text-dark">Đen</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button
                            type="submit"
                            @click.prevent="addSlide"
                            class="btn btn-primary btn-block add-button my-5"
                        >
                            Add slides
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </b-container>
</template>
<script>
export default {
    data() {
        return {
            load: true,
            slides: {
                active: "",
                title: "",
                btn_text: "",
                image: "",
                des_1: "",
                des_2: "",
                color: "",
            },
            check: false,
            errors: [],
        };
    },
    mounted() {
        //Check expire token of user
        var user = JSON.parse(localStorage.getItem("user"));
        if (user == null) {
            this.load = false;
            window.location.href = "/login";
        }
    },
    methods: {
        handleOnchange(e) {
            this.slides.image = "images/" + e.target.files[0].name;
        },
        addSlide() {
            axios
                .post("/create-slides", {
                    active: this.slides.active,
                    title: this.slides.title,
                    btn_text: this.slides.btn_text,
                    image: this.slides.image,
                    des_1: this.slides.des_1,
                    des_2: this.slides.des_2,
                    color: this.slides.color,
                })
                .then((response) => {
                    // console.log(response.data);
                    (this.check = true), (this.errors = [null]);
                    this.errors.length = 0;
                })
                .catch((error) => {
                    // console.log(error.response.data);
                    this.check = false;
                    // console.log(error.response.data.errors.title);
                    if (error.response.data.errors.title) {
                        this.errors = error.response.data.errors.title[0];
                    }
                    else if (error.response.data.errors.btn_text) {
                        this.errors = error.response.data.errors.btn_text[0];
                    }
                    else if (error.response.data.errors.color) {
                        this.errors = error.response.data.errors.color[0];
                    }
                });
        },
    },
};
</script>
<style scoped>
a {
    text-decoration: none;
}
label {
    font-weight: bold;
    margin: 10px 0;
}
textarea {
    height: 100px;
}
</style>
