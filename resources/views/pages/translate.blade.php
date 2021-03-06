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
            <textarea class="form-control" name="t" rows="3">{{ $from_text ?? '' }}</textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1"
                   class="form-label">{{ _('Into') }} {{ $target_language ?? '' }}</label>
            <textarea class="form-control" rows="3">{{ $into_text ?? '' }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
