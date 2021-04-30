@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Translation Page</h1>
        <form>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1"
                   class="form-label">{{ _('Translate from') }} {{ $source_language ?? '' }}</label>
            <textarea class="form-control" name="translate_from" rows="3">{{ $text ?? '' }}</textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1"
                   class="form-label">{{ _('Into') }} {{ $target_language ?? '' }}</label>
            <textarea class="form-control" name="translate_into" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
