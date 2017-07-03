<?php

// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
// Before VC Init
add_action( 'vc_before_init', 'vc_pagination_js' );


function vc_before_init_actions() {


// Element Class
    class vcInfoBox extends WPBakeryShortCode {

        // Element Init
        function __construct() {
            add_action( 'init', array( $this, 'vc_infobox_mapping2' ) );
            add_shortcode( 'vc_infobox3', array( $this, 'vc_infobox_html2' ) );
        }

        // Element Mapping
        public function vc_infobox_mapping2() {

            // Stop all if VC is not enabled
            if ( !defined( 'WPB_VC_VERSION' ) ) {
                return;
            }

            // Map the block with vc_map()
            vc_map(
                array(
                    'name' => __('Services sidebar', 'text-domain'),
                    'base' => 'vc_infobox3',
                    'description' => __('Another simple VC box', 'text-domain'),
                    'category' => __('My Custom Elements', 'text-domain'),
                    'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',
                    'params' => array(

                        array(
                            'type' => 'textfield',
                            'holder' => 'h3',
                            'class' => 'title-class',
                            'heading' => __( 'Title', 'text-domain' ),
                            'param_name' => 'title',
                            'value' => __( 'Default value', 'text-domain' ),
                            'description' => __( 'Box Title', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Custom Group',
                        ),

                        array(
                            'type' => 'textarea',
                            'holder' => 'div',
                            'class' => 'text-class',
                            'heading' => __( 'Text', 'text-domain' ),
                            'param_name' => 'text',
                            'value' => __( 'Default value', 'text-domain' ),
                            'description' => __( 'Box Text', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Custom Group',
                        ),

                    ),
                )
            );

        }


        // Element HTML
        public function vc_infobox_html2( $atts ) {

            // Params extraction
            extract(
                shortcode_atts(
                    array(
                        'title'   => '',
                        'text' => '',
                    ),
                    $atts
                )
            );

            // Fill $html var with data
            $html = '
       <!-- Nav tabs -->
          <ul class="nav nav-tabs bmn-vertical-navigation" role="tablist">
            <li role="presentation" class="bmn-tabs active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Management Consulting</a>
            </li>
            <li class="bmn-tabs" role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Financial Management & Audit Readiness</a>
            </li>
            <li class="bmn-tabs" role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Strategy Consulting</a>
            </li>
            <li class="bmn-tabs" role="presentation">
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Business Systems</a>
            </li>
          </ul>';

            return $html;

        }

    } // End Element Class


// Element Class Init
    new vcInfoBox();

}






function vc_pagination_js() {


// Element Class
    class vcInfoBox2 extends WPBakeryShortCode {

        // Element Init
        function __construct() {
            add_action( 'init', array( $this, 'vc_infobox_mapping3' ) );
            add_shortcode( 'vc_infobox2', array( $this, 'vc_infobox_html3' ) );
        }

        // Element Mapping
        public function vc_infobox_mapping3() {

            // Stop all if VC is not enabled
            if ( !defined( 'WPB_VC_VERSION' ) ) {
                return;
            }

            // Map the block with vc_map()
            vc_map(
                array(
                    'name' => __('Services Pagination', 'text-domain'),
                    'base' => 'vc_infobox2',
                    'description' => __('Another simple VC box', 'text-domain'),
                    'category' => __('My Custom Elements', 'text-domain'),
                    'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',
                    'params' => array(

                        array(
                            'type' => 'textfield',
                            'holder' => 'h3',
                            'class' => 'title-class',
                            'heading' => __( 'Title', 'text-domain' ),
                            'param_name' => 'title2',
                            'value' => __( 'Default value', 'text-domain' ),
                            'description' => __( 'Box Title', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Custom Group',
                        ),

                        array(
                            'type' => 'textarea_html',
                            'holder' => 'div',
                            'class' => 'text-class',
                            'heading' => __( 'Text', 'text-domain' ),
                            'param_name' => 'text2',
                            'value' => __( 'Default value', 'text-domain' ),
                            'description' => __( 'Box Text', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Custom Group',
                        ),

                    ),
                )
            );

        }


        // Element HTML
        public function vc_infobox_html3( $atts ) {

            // Params extraction
            extract(
                shortcode_atts(
                    array(
                        'title2'   => '',
                        'text2' => '',
                    ),
                    $atts
                )
            );

            // Fill $html var with data
            $html = '
            <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <h4>Consulting</h4>
        <ul>
            <li>Management Consulting</li>
            <li>Financial Management & Audit Readiness</li>
            <li>Strategy Consulting</li>
            <li>Business Systems</li>
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <h4>WorksForce Solutions</h4>
        <p>
            Today business environment demands agility. Quiah Consultants  flexible partnership enables us to be  be responsive to your unique needs. Whether you need staffing services, a workforce management program or project management we are the #1 Strategic Partner of choice. 
    
        </p>
    </div>


    <div role="tabpanel" class="tab-pane" id="messages">

    </div>
    <div role="tabpanel" class="tab-pane" id="settings">

    </div>
</div>';

            return $html;

        }

    } // End Element Class


// Element Class Init
    new vcInfoBox2();

}

