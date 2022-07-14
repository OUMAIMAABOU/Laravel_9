<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
     <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<div class="w-full flex flex-col justify-center items-center mt-9 ">
    <form action="{{ url('/TablePost') }}" method="POST"  id="step"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 py-8" enctype="multipart/form-data" >
    {{csrf_field()}}
  
        <h1 class="text-center font-bold text-xl m-5 text-blue-500"> Add New Poste  </h1>
<div   id="step1">
        <h1 class="text-center font-bold text-xl m-5 text-blue-500">Step 1</h1>
        <div  class=" font-bold text-xl ">
            <label for="title" class=" text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name ="title" id="title" class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="Slug">Slug</label>
            <input type="text" name ="slug" id="slug"  class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline" disabled>
        </div>
        <div>
            <label for="title"  class=" text-gray-700 text-sm font-bold mb-2">Categorie</label>
            <select id="Categorie" name="Categorie" class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline">
                @foreach ($categories as $rows)
              <option value= "{{ $rows->id}}">{{$rows->name}}</option>
              @endforeach
            </select>
        </div>
       
        <div>
            <label for="title"  class=" text-gray-700 text-sm font-bold mb-2">tag</label>
            <select id="tag" name="tag" class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline">
            @foreach ($tags as $tag)
              <option value= "{{ $tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
        </div>
       
     <div> <button type="button" id="nextBtn"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5" onclick=" next()">Next</button>
     </div>
  </div> <div style="text-align:center;margin-top:40px;">
 
    <div id="step2">
    <h1 class="text-center font-bold text-xl m-5 text-blue-500">Step 2</h1>

<div>
    <label for="Discription" class="mt-5">Discription</label>
    <textarea id="Discription" name="Discription" rows="4" class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline" placeholder="Your message..."></textarea>

</div>
<div>
    <label for="Image"  class=" text-gray-700 text-sm font-bold mb-2">Image</label>
    <input type="file" id="image" name="image"  class=" text-gray-700 text-sm font-bold mb-2" >

</div>
<div>
    <label for="Publish"  class=" text-gray-700 text-sm font-bold mb-2">Publish</label>
    oui <input type="radio" id="Publish" name="Publish" value="Oui" >
    non <input type="radio" id="Publish" name="Publish" value="No" >

</div>
<div>
     <div> <button type="button" id="nextBtn"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5" onclick="prev()">prev</button>

     <button type="submit" name="save" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">ADD </button>
     <button  name="cancel" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">cancel
</div>
    </div>
  
  </div>
    </form>
    </div>
 

   <script >
       document.getElementById('step2').hidden=true;
 
function next(){

document.getElementById('step2').hidden=false;  

document.getElementById('step1').hidden=true;


   


}
function prev(){


document.getElementById('step2').hidden=true;  

document.getElementById('step1').hidden=false;


   


}
new Vue({
  el: '#post',
  data: {
    title: "Gõ thử tiếng Việt có dấu",
  },
  computed: {
    slug: function() {
      var slug = this.sanitizeTitle(this.title);
      return slug;
    }
  },
  methods: {
    sanitizeTitle: function(title) {
      var slug = "";
      // Change to lower case
      var titleLower = title.toLowerCase();
      // Letter "e"
      slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
      // Letter "a"
      slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
      // Letter "o"
      slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
      // Letter "u"
      slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
      // Letter "d"
      slug = slug.replace(/đ/gi, 'd');
      // Trim the last whitespace
      slug = slug.replace(/\s*$/g, '');
      // Change whitespace to "-"
      slug = slug.replace(/\s+/g, '-');
      
      return slug;
    }
  }
});

</script>
</body>
</html>