@extends('layout.app')
@section('content')
    <!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Form Add Users</h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
				</div>
				<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-xxl">
					<!--begin::Form-->
					<form class="form d-flex flex-column flex-lg-row" action="{{ route('user.simpan') }}" method="post">
						@csrf
						<!--begin::Main column-->
						<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
							<!--begin:::Tabs-->
							<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
								<!--begin:::Tab item-->
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
								</li>
							</ul>
							<!--end:::Tabs-->
							<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab pane-->
									<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<!--begin::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>General</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="name" class="form-control mb-2" placeholder="name name" value="{{ old('name') }}" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Email</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Input-->
														<input type="email" name="email" class="form-control mb-2" placeholder="Email" value="{{ old('email') }}" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>

											<!-- Start Kategori-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Level Users </h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Input-->
														<select class="form-select" name="level" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
															<option value="" selected disabled hidden>-- Pilih Level --</option>
															<option value="admin">Admin</option>
															<option value="kasir">Kasir</option>
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--End Kategori-->

											<!--begin::Pricing-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Password</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-10 fv-row">
														<!--begin::Input-->
														<input type="password" name="password" class="form-control mb-2" value="{{ old('password') }}" required />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::Pricing-->
										</div>
									</div>
									<!--end::Tab pane-->
								</div>
							{{-- </form> --}}
							<!--end::Tab content-->
							<div class="d-flex justify-content-end">
								<!--begin::Button-->
								<a href="{{ route('user') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
								<button type="submit" class="btn btn-primary">Simpan</button>								
								<!--end::Button-->
							</div>
						</div>
						<!--end::Main column-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
		<!--begin::Footer-->
		<div id="kt_app_footer" class="app-footer">
			<!--begin::Footer container-->
			<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
				<!--begin::Copyright-->
				<div class="text-dark order-2 order-md-1">
					<span class="text-muted fw-semibold me-1">2023&copy;</span>
					<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
				</div>
				<!--end::Copyright-->
				<!--begin::Menu-->
				<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
					<li class="menu-item">
						<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
					</li>
					<li class="menu-item">
						<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
					</li>
					<li class="menu-item">
						<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
					</li>
				</ul>
				<!--end::Menu-->
			</div>
			<!--end::Footer container-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end:::Main-->
@endsection