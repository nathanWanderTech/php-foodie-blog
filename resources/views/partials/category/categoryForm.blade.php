{{ csrf_field() }}
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Name</label>
    <div class="col-lg-9">
        <input class="form-control" name="name" type="text" value="{{ $name ?? '' }}" />
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Description</label>
    <div class="col-lg-9">
        <input class="form-control" name="description" type="text" value="{{ $description ?? '' }}" />
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Upload thumbnail</label>
    <div class="col-lg-9">
        <input type="file" name="thumbnail_photo" accept="image/*"><br>
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label"></label>
    <div class="col-lg-9">
        <input type="reset" class="btn btn-secondary" value="Cancel" />
        <input type="submit" class="btn btn-primary" value="{{ $buttonName }}" />
    </div>
</div>
