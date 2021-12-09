<template>
<h1>This is admin innovation page</h1>
  <div class="card-body">
    <a
      data-toggle="modal"
      data-target="#exampleModal"
      class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"
      style="color: white"
      ><i class="fa fa-plus fa-sm text-white-50" aria-hidden="true"></i> Thêm
      sản phẩm</a
    >
    <table class="table">
      <thead>
        <tr>
          <th>Mã SP</th>
          <th>Hình Ảnh</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá Sản Phẩm</th>
          <th>Xuất Xứ</th>
          <th>Danh Mục</th>
          <th>Hiển thị</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody id="listProductInAdmin"></tbody>
    </table>
  </div>
<!-- Modal thêm sản phẩm -->
<div class="modal fade modal-panel" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleCreate">Thêm mới sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="error" style="font-size: 11px; color: red"></div>
        <!-- body -->
        <form name="myForm">
          <div class="form-group">
        <label for="exampleInputEmail1">Product Name<span style="color: red">*</span></label>
        <input type="text" class="form-control" id="inputName" >
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
          <label for="exampleInputEmail1">Price<span style="color: red">*</span></label>
          <input type="number" class="form-control" id="inputPrice">
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
          <label for="exampleInputEmail1">Product Code<span style="color: red">*</span></label>
          <input type="text" class="form-control" id="inputId" value="SP0001">
        </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Product Image<span style="color: red">*</span></label>
        <input type="text" class="form-control" id="inputImg" value="img/cay1.jpg">
      </div>
      <div class="row">
        <div class="col-sm-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Feature Product<span style="color: red">*</span></label>
        <select class="form-control" id="inputFea">
          <option value="1">Hiển Thị</option>
          <option value="0">Ẩn</option>
        </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Category<span style="color: red">*</span></label>
          <select class="form-control" id="inputCate">
          <option value="1">Tiêu cảnh để bàn</option>
          <option value="2">Chậu cảnh để bàn</option>
          <option value="3">Chậu cảnh mini</option>
          <option value="4">Phị kiện trang trí</option>
          <option value="5">Sen đá</option>
        </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Origin<span style="color: red">*</span></label>
          <select class="form-control" id="inputOrigin">
          <option value="Việt Nam">Việt Nam</option>
          <option value="Nhật Bản">Nhật Bản</option>
        </select>
        </div>
      </div>
    </div>
        </form>
        <!-- end body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <div id="submitButtons">
          <button type="button" class="btn btn-primary" onclick="addNewLocalProduct()">Thêm sản phẩm</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end Modal thêm sản phẩm -->
</template>

<script>
export default {

}
</script>

<style scoped>

</style>
