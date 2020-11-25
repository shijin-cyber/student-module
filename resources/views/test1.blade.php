<div class="container">
    
    <div class="container" style="padding-top: 60px;">
        <form method="post" action="/documentupload">
            @csrf
        <label>select student</label>
<select name="name" id="myselect">
        <option value="1">shijin</option>
        <option value="2">jafar ali khan</option>
        <option value="3">shijin</option>
        <option value="4">jafa ali khans</option>
    </select>


    <label>select Department</label>
<select name="department" id="myselect" >
        <option value="ece">ECE</option>
        <option value="eee">EEE</option>
        <option value="mech">MECH</option>
        <option value="cs">CS</option>
    </select>

    <label>Choose the Year</label>
<select name="year" id="myselect" >
        <option value="1">1St year</option>
        <option value="2">2nd year</option>
        <option value="3">3rd year</option>
        <option value="4">4th year</option>
    </select>

    <div class="form-group">
                            
                            <input type="file" name="document[]" class="form-control-image" multiple>
                        </div>
                        <input type="submit" name="upload" value="upload" class="btn btn-primary">
</form>
</div>
</div>