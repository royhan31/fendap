@extends('templates.default')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form update wisata</h4>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" value="It just dummy title">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category">
                            <option>-- Select Category --</option>
                            <option selected>Dummy 1</option>
                            <option>Dummy 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="8" placeholder="Enter description">It just dummy description</textarea>
                    </div>
                    <div class="d-flex justify-content-start align-items-start mb-3">
                        <div class="col-4 form-group">
                            <img src="{{ asset('asset/images/samples/1280x768/12.jpg') }}" alt="sample" class="rounded mw-100"/>
                            <p class="text-info mt-3">This is old image</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection