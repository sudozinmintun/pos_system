<div>
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">
                Create
            </h6>
            <hr />
            <div class="card border-top border-0 border-4 border-info">
                <form wire:submit.prevent="storeSubGroups" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div>
                                    <i class="bx bxs-list me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">
                                    Sub Group
                                </h5>
                            </div>
                            <hr />

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Main Category
                                </label>
                                <div class="col-sm-9">
                                    <select id="inputState" class="form-select"
                                        wire:model.debounce.800ms="main_category_id" id="main_category_id">
                                        <option value="">
                                            Select Main Category
                                        </option>
                                        @foreach ($main_categories as $main_categorie)
                                            <option value="{{ $main_categorie->id ?? '' }}">
                                                {{ $main_categorie->title ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('main_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Sub Group Title
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Sales Price
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="sales_price">
                                    @error('sales_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Photo
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" wire:model="photo" id="photo">
                                    @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
