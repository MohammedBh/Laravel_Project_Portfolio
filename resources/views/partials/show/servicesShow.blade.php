<div class="modal fade" id="exampleModalToggle_{{ $servicesDyns->id }}" aria-hidden="true" role="dialog"
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
                            <h4 class="">{{ $servicesDyns->icon }}</h4>
                            <h4 class="" style="">{{ $servicesDyns->titre }}</h4>
                            <h4 class="">{{ $servicesDyns->para }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <a href="/contenuSkillsDynamic/{{ $servicesDyns->id }}/edit" class="btn btn-success mx-2 text-white"
                    data-target="#exampleModalToggle2_{{ $servicesDyns->id }}" data-toggle="modal"
                    data-dismiss="modal">EDIT</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $servicesDyns->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">SERVICES - DYNAMIC (Edit)</h5>
                <button type="button" class="btn btn-close bg-danger" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body ">
                <form action="/backoffice/ServicesDync/{{ $servicesDyns->id }}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Icon</label>
                        <input type="text" class="form-control" value="{{$servicesDyns->icon}}" name="icon"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Titre</label>
                        <input type="text" class="form-control" value="{{$servicesDyns->titre}}" name="titre"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                        <input type="text" class="form-control" value="{{$servicesDyns->para}}" name="para"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-success mx-2 text-white">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
