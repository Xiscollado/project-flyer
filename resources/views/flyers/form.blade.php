@inject('countries', 'App\Http\Utilities\Country')
<div class="form-group">
    <label for="Street">Street</label>
    <input type="text" name="Street" id="Street" class="form-control" value="{{old('Street')}}">
</div>
<div class="form-group">
    <label for="City">City</label>
    <input type="text" name="City" id="City" class="form-control" value="{{old('City')}}">
</div>
<div class="form-group">
    <label for="Zip">Zip</label>
    <input type="text" name="Zip" id="Zip" class="form-control" value="{{old('Zip')}}">
</div>
<div class="form-group">
    <label for="Country">Country</label>
    <select name="Country" id="Country" class="form-control">
        @foreach($countries::all() as $country => $code)
            <option value="{{$country}}">{{$code}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="State">State</label>
    <input type="text" name="State" id="State" class="form-control" value="{{old('State')}}">
</div>
<div class="form-group">
    <label for="Price">Price</label>
    <input type="number" name="Price" id="Price" class="form-control" value="{{old('Price')}}">
</div>
<div class="form-group">
    <label for="Description">Description</label>
			<textarea class="form-control" name="Description" id="Description" rows="10">
				{{old('Description')}}
			</textarea>
</div>
<div class="form-group">
    <label for="Photos">Photos</label>
    <input type="file" name="Photos" id="Photos" class="form-control">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Create your flyer</button>
</div>
<hr>