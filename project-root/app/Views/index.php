<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>index</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <center>
  <div class="alert alert-info" role="alert"><font size="5">
    留言板</font>
  </div>
<!-- 修改留言modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">修改留言</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">原留言內容:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-primary" id="editcheck">送出</button>
                </div>
            </div>
        </div>
    </div>
<!-- 新增留言 -->
  <form>
    <table class="table table-bordered table-info">
      <tbody>
        <tr>
          <th>新增留言</th>
          <th for="input-user">姓名</th>
          <th>
            <input class="text-info" name="input-user" placeholder="name" />
          </th>
          <th align="center" for="input-content" >留言</th>
          <th align="center">
            <textarea class="text-info"   name="input-content" placeholder="message"></textarea>
          </th>
          <th align="center" rowspan="2">
            <button type="submit" class="btn btn-outline-info" id="create1">送出</button>
          </th>
        </tr>
      </tbody>
    </table>
  </form>
<!-- 顯示留言 -->
      <table class="table table-hover table-dark" align="center" width="1000px" height="150px">
        <thead>
          <tr>
              <th width="300px" class="text-muted"><font size="6">留言者</th>
              <th width="500px" class="text-muted"><font size="6">留言內容</th>
              <th width="200px" class="text-muted"><font size="6">時間</th>
          </tr>
        </thead>

      </table>
</center>
</body>
<script type="text/javascript" src="assets/js/messageboard.js"></script>
</html>
