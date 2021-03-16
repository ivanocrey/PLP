<!DOCTYPE html >
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <h1 class="text-center">Edit Data</h1>
    <div class="row justify-content-center">
        <div class="col-lg-6">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif
        <div class="card shadow mb-4">
        <form action="/lokasi/sub_lokasi3/{{$lokasi2->sub_id3}}"method="POST">
                @method('PUT')
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai</label>
                    <input name="nilai_2" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nilai" value="{{$lokasi2->nilai_2}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input name="keterangan_2" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Keterangan" value="{{$lokasi2->keterangan_2}}" >
                </div>
                <div class="modal-footer">
                    <a href="/lokasi" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

