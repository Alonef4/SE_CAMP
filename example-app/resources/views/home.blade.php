@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Workshop #HTML - FORM</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <form>
        <!-- Name -->
        <div class="card-body">
          <div class="form-group">
            <label>ชื่อ</label>
            <input type="text" class="form-control" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label>สกุล</label>
            <input type="text" class="form-control" placeholder="Enter LastName">
          </div>
          <!-- Date -->
          <div class="form-group">
            <label>Date:</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      {{-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> --}}
                  </div>
              </div>
          </div>
           <!-- Age -->
           <div class="form-group">
            <label>อายุ</label>
            <input type="text" class="form-control" placeholder="Enter Age">
        </div>
          <!-- radio -->
          <div class="form-group">
            <label>เพศ</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1">
              <label class="form-check-label">ชาย</label>
              &emsp;&nbsp;&nbsp;
              <input class="form-check-input" type="radio" name="radio1">
              <label class="form-check-label">หญิง</label>

            </div><br>
            <!-- เลือกรูป -->
            <div class="form-group">
            <label>รูป</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
            <!-- ที่อยู่ -->
            <div class="form-group">
                <label>ที่อยู่</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
              <!-- สี -->
              <div class="form-group">
                <label for="exampleSelectBorder">สีที่ชอบ</label>
                <select class="custom-select form-control-border" id="exampleSelectBorder">
                  <option>สีแดง</option>
                  <option>สีม่วง</option>
                  <option>สีนํ้าเงิน</option>
                </select>
              </div>
              <!-- เพลง -->
              <div class="form-group">
                <label>แนวเพลงที่ชอบ</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio1">
                  <label class="form-check-label">เพื่อชีวิต</label>
                  &emsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="radio" name="radio1">
                  <label class="form-check-label">ลูกทุ่ง</label>
                  &emsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="radio" name="radio1">
                  <label class="form-check-label">อื่นๆ</label>

                </div><br>

            <!-- ยินยอม -->

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
          </div>
        </div>

        <!-- /.card-body -->
        <style>
            .card-footer button {
              margin-right: 50px; /* ปรับระยะห่างระหว่างปุ่ม */
            }
          </style>

        <div class="card-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>

@endsection
