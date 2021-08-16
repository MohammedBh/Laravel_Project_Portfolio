<div class="modal fade" id="exampleModalToggle_{{ $portfolioDyns->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel">PORTFOLIO - DYNAMIC (Show)</h5>
                <button type="button" class="btn btn-close bg-danger" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body text-center">
                <div class="card " style="width: 100%;">
                    <div class="card-body">
                        <div class="mb-5">
                            <h4 class="">{{ $portfolioDyns->img_portfolio }}</h4>
                            <h4 class="" style="">{{ $portfolioDyns->icon1 }}</h4>
                            <h4 class="">{{ $portfolioDyns->icon2 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <a href="/contenuSkillsDynamic/{{ $portfolioDyns->id }}/edit" class="btn btn-success mx-2 text-white"
                    data-target="#exampleModalToggle2_{{ $portfolioDyns->id }}" data-toggle="modal"
                    data-dismiss="modal">EDIT</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $portfolioDyns->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">SKILLS - DYNAMIC (Edit)</h5>
                <button type="button" class="btn btn-close bg-danger" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body ">
                <form action="/backoffice/PortfolioDync/{{ $portfolioDyns->id }}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">IMG Portfolio</label>
                        <input type="text" class="form-control" value="{{ $portfolioDyns->img_portfolio }}" name="img_portfolio"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Icon 1</label>
                        <input type="text" class="form-control"
                            value="{{ $portfolioDyns->icon1 }}" name="icon1" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Icon 1</label>
                        <input type="text" class="form-control"
                            value="{{ $portfolioDyns->icon2 }}" name="icon2" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn btn-success mx-2 text-white">SAVE</button>
            </div>
        </div>
    </div>
</div>
