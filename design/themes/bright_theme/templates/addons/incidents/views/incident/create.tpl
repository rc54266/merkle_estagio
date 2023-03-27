{style src="addons/incidents/style2.less"}


<h2> Create Ticket </h2>

<div class="container">
    <form method="post" action="{""|fn_url}" name="create_incident">
    <input type="hidden" name="dispatch" value="incident.create" />
        <div class="row-fluid">
            <div class="col-4">
                <label for="subject">Title:</label>
            </div>
            <div class="col-8">
                <input type="text" name="subject" placeholder="Title" id="title" required>
            </div>
        </div>

            
    <!--    <div class="row-fluid">
            <div class="col-4">
                <label for="categories">Choose a Category</label>
            </div>
            <div class="col-8">
                <select name="cars" id="cars">
                    <option value="category_id">$category_name</option>
                </select>
            </div>
    </div> -->
        <div class="row-fluid">
            <div class="col-4">
                <label for="content">Message:</label>
            </div>
            <div class="col-8">
                <textarea name="content" placeholder="Enter your incident here..." id="msg" style="height:200px" required></textarea>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-4">
                <label for="upload">Select Image File to Upload:</label>
            </div>
            {include file="common/attach_images.tpl"
                image_name="product_main"
                image_object_type="product"
                no_detailed=true
                hide_titles=true
        }
           {*<div class="col-8">
                <input type="file" name="file" accept=".jpg,.png,.jpeg,.pdf">
             <!--   <input type="submit" name="submit" value="Upload"> -->
            </div>*} 
            <br>
            <br>
            <input type="submit" value="Create">
        </div>  
        </form>
</div>

