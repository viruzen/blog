
<!DOCTYPE html>
<html>
<head>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<style>
* {
  box-sizing: border-box;
}

body{
  height:150vh;
  display: flex;

  font-family: Times new roman;
  justify-content: center;
   background: white;
  background-size: cover;
  background-position: center;
}
header{
  font-size: 40px;
  margin-bottom: 60px;
  font-family: 'Montserrat', sans-serif;
}
.container {
  border-radius: 5px;
  background-color: #fcfcfc;
  padding: 20px;
  box-shadow: -2px 4px 28px 0px rgba(0,0,0,0.75);
  width:60%;
  max-width: 60%;
  height: auto;
}

.btn {
  margin-top: 30px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
@include('layouts.nav')
<div class="container">
 <header>Revue Blog Post</header>
 {!! Form::open(['url' => route('blog.store'), 'class' => 'form-horizontal', 'role' => 'form']) !!}
 <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
     {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}

     <div class="col-md-8">
         {!! Form::text('title', null, ['class' => 'form-input rounded-md shadow-sm mt-1 block w-full', 'required', 'autofocus']) !!}

         <span class="help-block">
             <strong>{{ $errors->first('title') }}</strong>
         </span>
     </div>
 </div>

 <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
     {!! Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) !!}

     <div class="col-md-8">
         {!! Form::textarea('body', null, ['class' => 'body form-input rounded-md shadow-sm mt-1 block w-full', 'required']) !!}

         <span class="help-block">
             <strong>{{ $errors->first('body') }}</strong>
         </span>
     </div>
 </div>

 <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
     {!! Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']) !!}

     <div class="col-md-8">
         {!! Form::select('category_id', $categories, null, ['placeholder' => 'Please select','class' => 'form-input rounded-md shadow-sm mt-1 block w-full', 'required']) !!}

         <span class="help-block">
             <strong>{{ $errors->first('category_id') }}</strong>
         </span>
     </div>
 </div>

 @php
     if(isset($post)) {
         $tag = $post->tags->pluck('name')->all();
     } else {
         $tag = null;
     }
 @endphp

 <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
     {!! Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']) !!}

     <div class="col-md-8">
         {!! Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags rounded-md shadow-sm mt-1 block w-full', 'required', 'multiple']) !!}

         <span class="help-block">
             <strong>{{ $errors->first('tags') }}</strong>
         </span>
     </div>
 </div>
 <div class="flex items-center justify-end mt-4">
   <button type="submit" onclick="tinyMCE.triggerSave();" class="btn btn-success">
                                   {{ __('Post') }}
                               </button>
                  </div>
 {!! Form::close() !!}
</div>
</body>
<script>
      $(document).ready(function() {
        $('.select2-tags').select2({
          tags: true
        });
        tinymce.init({
          selector: 'textarea.body',
          image_upload_url:'',
          automatic_upload:false,
          plugins: 'image code',
          height:300,
          branding:false,
          menubar:false,
          fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 64pt 72pt",
          toolbar: "codesample | bold italic | sizeselect fontselect |     fontsizeselect | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code image | insertfile undo redo | forecolor backcolor emoticons | code "
              });
      });


  </script>
</html>
