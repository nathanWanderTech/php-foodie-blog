{{ csrf_field() }}
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Post title</label>
    <div class="col-lg-9">
        <input class="form-control" name="title" type="text" value="{{ $title ?? '' }}" />
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Content</label>
    <div class="col-lg-9">
        <textarea class="form-control" name="content" value="{{ $content ?? '' }}"></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Category</label>
    <div class="col-lg-9">
        <select class="form-control" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
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
