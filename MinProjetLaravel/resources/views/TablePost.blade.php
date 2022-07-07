<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.tailwindcss.com"></script>

    <title>List Postes</title>
</head>
{{--  class="flex flex-col justify-between item-center" --}}
<body>
    <main>
            <h1 class =" text-xl font-bold text-center m-5 text-rose-500"> List des contact</h1>
            <div class="flex flex-col justify-between item-center m-5">

                <div class=" flex flex-row-reverse m-5">
                <a href="{{ url('/posts/create') }}" class=" text-center w-52 m-5  bg-blue-500 text-white font-bold py-2 px-4 " >  Poste</a> </div>
                <table   class="border-collapse border border-slate-400 "> 
                    <thead class="m-3">
                        <tr><th class="border border-slate-300 ..."> Title </th>
                            <th class="border border-slate-300 ..."> categorie </th>
                            <th class="border border-slate-300 ..."> tages </th>
                            <th class="border border-slate-300 ..."> publish </th>
                            <th class="border border-slate-300 ..."> create date </th>
                            <th class="border border-slate-300 ..."> Action </th>
                        </tr>
                    </thead>
                    @foreach($post as $Poste)
                    {{csrf_field()}}

                    <tr>
                      
                           <th class="border border-slate-300 ..."> {{ $Poste -> title }} </th>
                             <th class="border border-slate-300 ...">  {{ $Poste ->categorie_id }}</th> 
                             <th class="border border-slate-300 ...">  {{ $Poste -> tag_id }}</th>
                             <th class="border border-slate-300 ...">  {{ $Poste -> publish }}</th> 
 
                             <th class="border border-slate-300 ...">{{ $Poste ->created_at }} </th> 
                             <th class="border border-slate-300 ..."> 
                              <button>
                              <button type="submit" name="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">Update </button>
                              <button type="submit" name="delete" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">delete </button>

                              </button>
                             </th> 
                           
                    </tr>   
                
                   @endforeach
                    </table>

                  
            </div>
    </main>
  
 
</body>
</html>