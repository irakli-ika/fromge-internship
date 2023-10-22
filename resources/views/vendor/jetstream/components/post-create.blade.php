<div class="block m-auto p-6 rounded-lg shadow-lg bg-white w-[27rem]">
    <x-jet-validation-errors />
        <form action="{{ route('posts.store') }}" method="POST">
          @csrf
          <div class="form-group mb-6 mt-2">
            <label for="post-heade" class="form-label inline-block mb-2 text-gray-700">Title</label>
            <input type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
              id="post-heade" 
              name="heade"
              aria-describedby="heade" placeholder="Enter post title">
          </div>
          <div class="form-group mb-6">
            <label for="post-body" class="form-label inline-block mb-2 text-gray-700">Post body</label>
            <textarea
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="post-body"
              rows="7"
              name="body"
              placeholder="Enter post text"
            ></textarea>
          </div>
          
          <button type="submit" class="
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Add Post</button>
        </form>
      </div>

      