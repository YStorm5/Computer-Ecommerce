<div class="sm:w-1/5 flex flex-col p-4 bg-white border w-2/5">
    <h1>FILTERS</h1>
    <hr>
    <form action="/products/filter" method="POST">
        @csrf

        <div class="mt-2">BRAND
            <div class="mt-2 py-1 flex gap-3">
                <input type="checkbox" id="option1" name="brand[]" value="asus">
                <label for="option1">Asus</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="brand[]" value="dell">
                <label for="option1">Dell</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="brand[]" value="predictor">
                <label for="option1">Predictor</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="brand[]" value="msi">
                <label for="option1">MSI</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="brand[]" value="rog">
                <label for="option1">Rog</label>
            </div>
        </div>
        <hr>
        <div class="mt-2">PRICE
            <div class="mt-2 py-1 flex gap-3">
                <input type="checkbox" id="option1" name="price[]" value="500-1000">
                <label for="option1">500-1000</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="price[]" value="1000-2000">
                <label for="option1">1000-2000</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="price[]" value=">2000">
                <label for="option1">2000+</label>
            </div>
        </div>
        <hr>
        <div class="mt-2">RATING
            <div class="mt-2 py-1 flex gap-3">
                <input type="checkbox" id="option1" name="rate[]" value="5">
                <label for="option1">5 Star</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="rate[]" value="4">
                <label for="option1">4 Star</label>
            </div>
            <div class="py-1 flex gap-3">
                <input type="checkbox" id="option1" name="rate[]" value="3">
                <label for="option1">3 Star</label>
            </div>
        </div>
        <hr>
        <div class="mt-2">
            <button type="submit" id="" class="border bg-red-500 rounded p-2">Summit</button>
        </div>
    </form>

</div>
