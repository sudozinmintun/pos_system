<span>
    <input type="text" wire:model="title">
</span>
<table class="table">
    <thead class="table-light">

        <tr>

            <td style="text-align: left; color: black; width: 20%;">
                <select class="form-control">
                    <option value="">--Select Ingredients--</option>
                    @foreach ($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">
                            {{ $ingredient->title ?? '' }}
                        </option>
                    @endforeach
                </select>
            </td>

            <td style="text-align: center; color: black; width: 20%">
                <input type="text">
            </td>

            <td style="text-align: left; color: black; width: 20%;">
                <select class="form-control">
                    <option value="">--Select Ingredients--</option>
                    @foreach ($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">
                            {{ $ingredient->title ?? '' }}
                        </option>
                    @endforeach
                </select>
            </td>

            <td style="text-align: center; color: black; width: 20%">
                <input type="text">
            </td>

            <td style="text-align: center; color: black; width: 20%">
                <input type="text" placeholder="Number of Unit">
            </td>

            <td style="text-align: center; color: black; width: 20%">
                <input type="text" placeholder="Price/ Kg">
            </td>

            <td style="text-align: center; color: black; width: 20%">

            </td>

            <td style="color: white; text-align: center; width: 20%">
                <button type="button" style="color: red;">
                    Save
                </button>
            </td>
        </tr>
    </thead>

</table>
