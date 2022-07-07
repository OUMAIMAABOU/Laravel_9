function next(){

    document.getElementById('step2').innerHTML=`  <h1 class="mt-3">Step 2</h1>
    
    <div>
        <label for="Discription" class="mt-5">Discription</label>
        <textarea id="Discription" name="Discription" rows="4" class="shadow  border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline" placeholder="Your message..."></textarea>

    </div>
    <div>
        <label for="Image"  class="block text-gray-700 text-sm font-bold mb-2">Image</label>
        <input type="file" id="image" name="image"  class="block text-gray-700 text-sm font-bold mb-2" >

    </div>
    <div>
        <label for="Publish"  class=" text-gray-700 text-sm font-bold mb-2">Publish</label>
         <input type="radio" id="Publish" name="contact" value="Oui" >
         <input type="radio" id="Publish" name="contact" value="No" >

    </div>
    <div>
         <button type="submit" id="prv" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">prev </button>

         <button type="submit" name="save" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">ADD </button>
         <button  name="cancel" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-5">cancel
    </div>
`;
        document.getElementById("results").innerHTML='<button  class="btn btn-lg mt-3  me-5" style="background-color: #1078AD; color: white;" onclick=" algorithm();">results</button>';

       

    
}