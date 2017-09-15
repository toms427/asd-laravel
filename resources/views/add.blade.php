@extends('layouts.home.apphome')


@section('content')
    <section class="content">
        <div class="callout callout-info">
            <h4>Reminder!</h4>
            Instructions for how to use modals are available on the
            <a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modal Examples</h3>
                    </div>
                    <div class="box-body">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                            Launch Default Modal
                        </button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                            Launch Info Modal
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                            Launch Danger Modal
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                            Launch Warning Modal
                        </button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                            Launch Success Modal
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-default" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-primary fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Primary Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-info fade" id="modal-info" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Info Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-warning fade" id="modal-warning">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Warning Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-success fade" id="modal-success">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Success Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-danger fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Danger Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div><div class="row docs-premium-template">
                <div class="col-sm-12 col-md-6">
                    <div class="box box-solid">
                        <div class="box-body">
                            <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                                PREMIUM TEMPLATE
                            </h4>
                            <div class="media">
                                <div class="media-left">
                                    <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705">
                                        <img src="/uploads/images/free_templates/creative-tim-material-angular.png" alt="Material Dashboard Pro" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <p class="pull-right">
                                            <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705" class="btn btn-success btn-sm">
                                                LEARN MORE
                                            </a>
                                        </p>

                                        <h4 style="margin-top: 0">Material Dashboard Pro ─ $59</h4>

                                        <p>Angular 2 Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design</p>
                                        <p style="margin-bottom: 0">
                                            <i class="fa fa-shopping-cart margin-r5"></i> 311+ purchases
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="box box-solid">
                        <div class="box-body">
                            <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                                PREMIUM TEMPLATE
                            </h4>
                            <div class="media">
                                <div class="media-left">
                                    <a href="https://themequarry.com/theme/edura-multipurpose-website-template-ASFEDA84">
                                        <img src="https://themequarry.com/storage/images/approved/ASFEDA84_v1.0.0_5808f979de3ca.png" alt="Edura" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <p class="pull-right">
                                            <a href="https://themequarry.com/theme/edura-multipurpose-website-template-ASFEDA84" class="btn btn-success btn-sm">
                                                LEARN MORE
                                            </a>
                                        </p>

                                        <h4 style="margin-top: 0">Edura ─ $16</h4>

                                        <p>Multipurpose Website Template</p>
                                        <p style="margin-bottom: 0">
                                            <i class="fa fa-shopping-cart margin-r5"></i> 50+ purchases
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></section>
@endsection
