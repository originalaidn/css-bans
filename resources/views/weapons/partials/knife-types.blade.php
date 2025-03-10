<div class="row">
    @foreach($skins as $skin)
        <div class="col-md-3 mb-4">
            <a class="card style-6" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#skinPreviewModal" data-skin-image="{{ $skin['image'] }}" data-skin-name="{{ $skin['paint_name'] }}">
                <span id="skin_{{$skin['paint']}}_{{$skin['weapon_defindex']}}" class="skin_active badge 
                    {{ $skin['is_applied_t'] && $skin['is_applied_ct'] ? 'badge-success' : ($skin['is_applied_t'] ? 'badge-danger' : ($skin['is_applied_ct'] ? 'badge-primary' : '')) }}">
                    {{ $skin['is_applied_t'] && $skin['is_applied_ct'] ? __('skins.active_both') : ($skin['is_applied_t'] ? __('skins.active_t') : ($skin['is_applied_ct'] ? __('skins.active_ct') : '')) }}
                </span>
                <div class="loader-skins"></div> <!-- Add loader -->
                <img src="{{ $skin['image'] }}" class="card-img-top lazy" alt="{{ $skin['paint_name'] }}" crossorigin="anonymous">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>{{ $skin['paint_name'] }}</b>
                            @if($skin['weapon_nametag'])
                                <div class="text-muted small">
                                    {{ __('Nametag') }}: "{{ $skin['weapon_nametag'] }}"
                                </div>
                            @endif
                        </div>
                        <div class="col-12 text-center">
                        <button class="btn btn-primary apply-skin" 
                                data-bs-toggle="modal" 
                                data-bs-target="#applySkinModal" 
                                data-weapon-defindex="{{ $skin['weapon_defindex'] }}" 
                                data-weapon-paint-id="{{ $skin['paint'] }}" 
                                data-wear="{{ $skin['wear'] ?? '' }}" 
                                data-seed="{{ $skin['seed'] ?? '' }}" 
                                data-weapon-team="{{ $skin['weapon_team'] }}"
                                data-weapon-name="{{ $skin['weapon_name'] }}"
                                data-weapon-nametag="{{ $skin['weapon_nametag'] }}"
                                data-weapon-stattrak="{{ $skin['weapon_stattrak'] }}"
                                data-weapon-stattrak-count="{{ $skin['weapon_stattrak_count'] }}">
                            <i class="fas fa-cog"></i> {{ __('skins.applySkin') }}
                        </button>
                    </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
