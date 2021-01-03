@extends('layout.app')
@section('heading', 'Messages')
@section('content')
<!-- Direct Chat -->
<div class="row">
	<div class="col-md-12">
		<!-- DIRECT CHAT PRIMARY -->
		<div class="card card-prirary cardutline direct-chat direct-chat-primary">
			<div class="card-header">
				<h3 class="card-title">Chat</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<i class="fas fa-comments"></i></button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<!-- Conversations are loaded here -->
				<div class="direct-chat-messages">
                    @foreach($messages as $message)
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">{{ $message->author->name }}</span>
                                <span class="direct-chat-timestamp float-right">{{ $message->created_at }}</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('theme/images/user1.jpg') }}" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                {{ $message->text }}
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    @endforeach
				</div>
				<!--/.direct-chat-messages-->
			</div>
			<!-- /.card-body -->
		</div>
		<!--/.direct-chat -->
	</div>
	<!-- /.col -->
</div>
<!-- /.Direct Chat -->
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".direct-chat-messages").animate({ scrollTop: $(document).height() }, 1000);
        });
    </script>
@endsection