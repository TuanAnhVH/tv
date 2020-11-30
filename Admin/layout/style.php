<style>
  .nav-link {
    display: block;
    padding: 0.5rem 1rem;
  }

  .nav-link:hover, .nav-link:focus {
    text-decoration: none;
  }

  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
  }

  .nav-tabs {
    border-bottom: 1px solid #dee2e6;
  }

  .nav-tabs .nav-item {
    margin-bottom: -1px;
  }

  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6;
  }

  .nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
  }

  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
  }

  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .nav-pills .nav-link {
    border-radius: 0.25rem;
  }

  .nav-pills .nav-link.active,
  .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #007bff;
  }

  .nav-fill .nav-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center;
  }

  .nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center;
  }

  .tab-content > .tab-pane {
    display: none;
  }

  .tab-content > .active {
    display: block;
  }

        
  :root {
      --blue: #007bff;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #dc3545;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --green: #28a745;
      --teal: #20c997;
      --cyan: #17a2b8;
      --white: #fff;
      --gray: #6c757d;
      --gray-dark: #343a40;
      --primary: #007bff;
      --secondary: #6c757d;
      --success: #28a745;
      --info: #17a2b8;
      --warning: #ffc107;
      --danger: #dc3545;
      --light: #f8f9fa;
      --dark: #343a40;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }
    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }
    
    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }
    
    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
    }
    
    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }
    
    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }
    
    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }
    
    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }
    
    .no-gutters {
      margin-right: 0;
      margin-left: 0;
    }
    
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
      padding-right: 0;
      padding-left: 0;
    }
    
    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

  .mt-4,
  .my-4 {
    margin-top: 1.5rem !important;
  }

  .m-0 {
      margin: 0 !important;
    }
    
    .mt-0,
    .my-0 {
      margin-top: 0 !important;
    }
    
    .mr-0,
    .mx-0 {
      margin-right: 0 !important;
    }
    
    .mb-0,
    .my-0 {
      margin-bottom: 0 !important;
    }
    
    .ml-0,
    .mx-0 {
      margin-left: 0 !important;
    }
    
    .m-1 {
      margin: 0.25rem !important;
    }
    
    .mt-1,
    .my-1 {
      margin-top: 0.25rem !important;
    }
    
    .mr-1,
    .mx-1 {
      margin-right: 0.25rem !important;
    }
    
    .mb-1,
    .my-1 {
      margin-bottom: 0.25rem !important;
    }
    
    .ml-1,
    .mx-1 {
      margin-left: 0.25rem !important;
    }
    
    .m-2 {
      margin: 0.5rem !important;
    }
    
    .mt-2,
    .my-2 {
      margin-top: 0.5rem !important;
    }
    
    .mr-2,
    .mx-2 {
      margin-right: 0.5rem !important;
    }
    
    .mb-2,
    .my-2 {
      margin-bottom: 0.5rem !important;
    }
    
    .ml-2,
    .mx-2 {
      margin-left: 0.5rem !important;
    }
    
    .m-3 {
      margin: 1rem !important;
    }
    
    .mt-3,
    .my-3 {
      margin-top: 1rem !important;
    }
    
    .mr-3,
    .mx-3 {
      margin-right: 1rem !important;
    }
    
    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }
    
    .ml-3,
    .mx-3 {
      margin-left: 1rem !important;
    }
    
    .m-4 {
      margin: 1.5rem !important;
    }
    
    .mt-4,
    .my-4 {
      margin-top: 1.5rem !important;
    }
    
    .mr-4,
    .mx-4 {
      margin-right: 1.5rem !important;
    }
    
    .mb-4,
    .my-4 {
      margin-bottom: 1.5rem !important;
    }
    
    .ml-4,
    .mx-4 {
      margin-left: 1.5rem !important;
    }
    
    .m-5 {
      margin: 3rem !important;
    }
    
    .mt-5,
    .my-5 {
      margin-top: 3rem !important;
    }
    
    .mr-5,
    .mx-5 {
      margin-right: 3rem !important;
    }
    
    .mb-5,
    .my-5 {
      margin-bottom: 3rem !important;
    }
    
    .ml-5,
    .mx-5 {
      margin-left: 3rem !important;
    }
    
    .p-0 {
      padding: 0 !important;
    }
    
    .pt-0,
    .py-0 {
      padding-top: 0 !important;
    }
    
    .pr-0,
    .px-0 {
      padding-right: 0 !important;
    }
    
    .pb-0,
    .py-0 {
      padding-bottom: 0 !important;
    }
    
    .pl-0,
    .px-0 {
      padding-left: 0 !important;
    }
    
    .p-1 {
      padding: 0.25rem !important;
    }
    
    .pt-1,
    .py-1 {
      padding-top: 0.25rem !important;
    }
    
    .pr-1,
    .px-1 {
      padding-right: 0.25rem !important;
    }
    
    .pb-1,
    .py-1 {
      padding-bottom: 0.25rem !important;
    }
    
    .pl-1,
    .px-1 {
      padding-left: 0.25rem !important;
    }
    
    .p-2 {
      padding: 0.5rem !important;
    }
    
    .pt-2,
    .py-2 {
      padding-top: 0.5rem !important;
    }
    
    .pr-2,
    .px-2 {
      padding-right: 0.5rem !important;
    }
    
    .pb-2,
    .py-2 {
      padding-bottom: 0.5rem !important;
    }
    
    .pl-2,
    .px-2 {
      padding-left: 0.5rem !important;
    }
    
    .p-3 {
      padding: 1rem !important;
    }
    
    .pt-3,
    .py-3 {
      padding-top: 1rem !important;
    }
    
    .pr-3,
    .px-3 {
      padding-right: 1rem !important;
    }
    
    .pb-3,
    .py-3 {
      padding-bottom: 1rem !important;
    }
    
    .pl-3,
    .px-3 {
      padding-left: 1rem !important;
    }
    
    .p-4 {
      padding: 1.5rem !important;
    }
    
    .pt-4,
    .py-4 {
      padding-top: 1.5rem !important;
    }
    
    .pr-4,
    .px-4 {
      padding-right: 1.5rem !important;
    }
    
    .pb-4,
    .py-4 {
      padding-bottom: 1.5rem !important;
    }
    
    .pl-4,
    .px-4 {
      padding-left: 1.5rem !important;
    }
    
    .p-5 {
      padding: 3rem !important;
    }
    
    .pt-5,
    .py-5 {
      padding-top: 3rem !important;
    }
    
    .pr-5,
    .px-5 {
      padding-right: 3rem !important;
    }
    
    .pb-5,
    .py-5 {
      padding-bottom: 3rem !important;
    }
    
    .pl-5,
    .px-5 {
      padding-left: 3rem !important;
    }

    .card {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
    }
    
    .card > hr {
      margin-right: 0;
      margin-left: 0;
    }
    
    .card > .list-group:first-child .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }
    
    .card > .list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }
    
    .card-body {
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.25rem;
    }
    
    .card-title {
      margin-bottom: 0.75rem;
    }
    
    .card-subtitle {
      margin-top: -0.375rem;
      margin-bottom: 0;
    }
    
    .card-text:last-child {
      margin-bottom: 0;
    }
    
    .card-link:hover {
      text-decoration: none;
    }
    
    .card-link + .card-link {
      margin-left: 1.25rem;
    }
    
    .card-header {
      padding: 0.75rem 1.25rem;
      margin-bottom: 0;
      background-color: rgba(0, 0, 0, 0.03);
      border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }
    
    .card-header:first-child {
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }
    
    .card-header + .list-group .list-group-item:first-child {
      border-top: 0;
    }
    
    .card-footer {
      padding: 0.75rem 1.25rem;
      background-color: rgba(0, 0, 0, 0.03);
      border-top: 1px solid rgba(0, 0, 0, 0.125);
    }
    
    .card-footer:last-child {
      border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
    }
    
    .card-header-tabs {
      margin-right: -0.625rem;
      margin-bottom: -0.75rem;
      margin-left: -0.625rem;
      border-bottom: 0;
    }
    
    .card-header-pills {
      margin-right: -0.625rem;
      margin-left: -0.625rem;
    }
    
    .card-img-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1.25rem;
    }
    
    .card-img {
      width: 100%;
      border-radius: calc(0.25rem - 1px);
    }
    
    .card-img-top {
      width: 100%;
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px);
    }
    
    .card-img-bottom {
      width: 100%;
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px);
    }
    
    .card-deck {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    
    .card-deck .card {
      margin-bottom: 15px;
    }
    
    @media (min-width: 576px) {
      .card-deck {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
      }
      .card-deck .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
      }
    }
    
    .card-group {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    
    .card-group > .card {
      margin-bottom: 15px;
    }
    
    @media (min-width: 576px) {
      .card-group {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
      }
      .card-group > .card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0;
      }
      .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
      }
      .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      .card-group > .card:not(:last-child) .card-img-top,
      .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
      }
      .card-group > .card:not(:last-child) .card-img-bottom,
      .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
      }
      .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
      .card-group > .card:not(:first-child) .card-img-top,
      .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
      }
      .card-group > .card:not(:first-child) .card-img-bottom,
      .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
      }
    }
    
    .card-columns .card {
      margin-bottom: 0.75rem;
    }

    .bg-primary {
      background-color: #007bff !important;
    }
    
    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
      background-color: #0062cc !important;
    }
    
    .bg-secondary {
      background-color: #6c757d !important;
    }
    
    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
      background-color: #545b62 !important;
    }
    
    .bg-success {
      background-color: #28a745 !important;
    }
    
    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
      background-color: #1e7e34 !important;
    }
    
    .bg-info {
      background-color: #17a2b8 !important;
    }
    
    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
      background-color: #117a8b !important;
    }
    
    .bg-warning {
      background-color: #ffc107 !important;
    }
    
    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
      background-color: #d39e00 !important;
    }
    
    .bg-danger {
      background-color: #dc3545 !important;
    }
    
    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
      background-color: #bd2130 !important;
    }
    
    .bg-light {
      background-color: #f8f9fa !important;
    }
    
    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
      background-color: #dae0e5 !important;
    }
    
    .bg-dark {
      background-color: #343a40 !important;
    }
    
    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
      background-color: #1d2124 !important;
    }
    
    .bg-white {
      background-color: #fff !important;
    }
    
    .bg-transparent {
      background-color: transparent !important;
    }

    .text-white {
      color: #fff !important;
    }
    
    .text-primary {
      color: #007bff !important;
    }
    
    a.text-primary:hover, a.text-primary:focus {
      color: #0056b3 !important;
    }
    
    .text-secondary {
      color: #6c757d !important;
    }
    
    a.text-secondary:hover, a.text-secondary:focus {
      color: #494f54 !important;
    }
    
    .text-success {
      color: #28a745 !important;
    }
    
    a.text-success:hover, a.text-success:focus {
      color: #19692c !important;
    }
    
    .text-info {
      color: #17a2b8 !important;
    }
    
    a.text-info:hover, a.text-info:focus {
      color: #0f6674 !important;
    }
    
    .text-warning {
      color: #ffc107 !important;
    }
    
    a.text-warning:hover, a.text-warning:focus {
      color: #ba8b00 !important;
    }
    
    .text-danger {
      color: #dc3545 !important;
    }
    
    a.text-danger:hover, a.text-danger:focus {
      color: #a71d2a !important;
    }
    
    .text-light {
      color: #f8f9fa !important;
    }
    
    a.text-light:hover, a.text-light:focus {
      color: #cbd3da !important;
    }
    
    .text-dark {
      color: #343a40 !important;
    }
    
    a.text-dark:hover, a.text-dark:focus {
      color: #121416 !important;
    }
    
    .text-body {
      color: #212529 !important;
    }
    
    .text-muted {
      color: #6c757d !important;
    }
    
    .text-black-50 {
      color: rgba(0, 0, 0, 0.5) !important;
    }
    
    .text-white-50 {
      color: rgba(255, 255, 255, 0.5) !important;
    }
    
    .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
    }
    
    .text-decoration-none {
      text-decoration: none !important;
    }
    
    .text-break {
      word-break: break-word !important;
      overflow-wrap: break-word !important;
    }
    
    .text-reset {
      color: inherit !important;
    }
    
    .visible {
      visibility: visible !important;
    }
    
    .invisible {
      visibility: hidden !important;
    }
    .text-monospace {
      font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }
    
    .text-justify {
      text-align: justify !important;
    }
    
    .text-wrap {
      white-space: normal !important;
    }
    
    .text-nowrap {
      white-space: nowrap !important;
    }
    
    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    .text-left {
      text-align: left !important;
    }
    
    .text-right {
      text-align: right !important;
    }
    
    .text-center {
      text-align: center !important;
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
    }
    
    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    
    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }
    
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }
    
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }
    
    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
      border: 0;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    
    .table-hover tbody tr:hover {
      color: #212529;
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-primary,
    .table-primary > th,
    .table-primary > td {
      background-color: #b8daff;
    }
    
    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody + tbody {
      border-color: #7abaff;
    }
    
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    
    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
      background-color: #d6d8db;
    }
    
    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody + tbody {
      border-color: #b3b7bb;
    }
    
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    
    .table-success,
    .table-success > th,
    .table-success > td {
      background-color: #c3e6cb;
    }
    
    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody + tbody {
      border-color: #8fd19e;
    }
    
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    
    .table-info,
    .table-info > th,
    .table-info > td {
      background-color: #bee5eb;
    }
    
    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody + tbody {
      border-color: #86cfda;
    }
    
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    
    .table-warning,
    .table-warning > th,
    .table-warning > td {
      background-color: #ffeeba;
    }
    
    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody + tbody {
      border-color: #ffdf7e;
    }
    
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    
    .table-danger,
    .table-danger > th,
    .table-danger > td {
      background-color: #f5c6cb;
    }
    
    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody + tbody {
      border-color: #ed969e;
    }
    
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    
    .table-light,
    .table-light > th,
    .table-light > td {
      background-color: #fdfdfe;
    }
    
    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody + tbody {
      border-color: #fbfcfc;
    }
    
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    
    .table-dark,
    .table-dark > th,
    .table-dark > td {
      background-color: #c6c8ca;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #95999c;
    }
    
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    
    .table-active,
    .table-active > th,
    .table-active > td {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    
    .table .thead-dark th {
      color: #fff;
      background-color: #343a40;
      border-color: #454d55;
    }
    
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .table-dark {
      color: #fff;
      background-color: #343a40;
    }
    
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #454d55;
    }
    
    .table-dark.table-bordered {
      border: 0;
    }
    
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, 0.05);
    }
    
    .table-dark.table-hover tbody tr:hover {
      color: #fff;
      background-color: rgba(255, 255, 255, 0.075);
    }
    .align-top {
      vertical-align: top !important;
    }
    
    .align-middle {
      vertical-align: middle !important;
    }
    
    .align-bottom {
      vertical-align: bottom !important;
    }
    
    .align-text-bottom {
      vertical-align: text-bottom !important;
    }
    
    .align-text-top {
      vertical-align: text-top !important;
    }
    
    .pagination {
      display: -ms-flexbox;
      display: flex;
      padding-left: 0;
      list-style: none;
      border-radius: 0.25rem;
    }
    
    .page-link {
      position: relative;
      display: block;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.25;
      color: #007bff;
      background-color: #fff;
      border: 1px solid #dee2e6;
    }
    
    .page-link:hover {
      z-index: 2;
      color: #0056b3;
      text-decoration: none;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    
    .page-link:focus {
      z-index: 2;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }
    
    .page-item:last-child .page-link {
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }
    
    .page-item.active .page-link {
      z-index: 1;
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }
    
    .page-item.disabled .page-link {
      color: #6c757d;
      pointer-events: none;
      cursor: auto;
      background-color: #fff;
      border-color: #dee2e6;
    }
    
    .pagination-lg .page-link {
      padding: 0.75rem 1.5rem;
      font-size: 1.25rem;
      line-height: 1.5;
    }
    
    .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius: 0.3rem;
      border-bottom-left-radius: 0.3rem;
    }
    
    .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius: 0.3rem;
      border-bottom-right-radius: 0.3rem;
    }
    
    .pagination-sm .page-link {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
    }
    
    .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius: 0.2rem;
      border-bottom-left-radius: 0.2rem;
    }
    
    .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius: 0.2rem;
      border-bottom-right-radius: 0.2rem;
    }
    
    
    .form-control {
      display: block;
      width: 100%;
      height: calc(1.5em + 0.75rem + 2px);
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-control {
        transition: none;
      }
    }
    
    .form-control::-ms-expand {
      background-color: transparent;
      border: 0;
    }
    
    .form-control:focus {
      color: #495057;
      background-color: #fff;
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    .form-control::-webkit-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }
    
    .form-control::-moz-placeholder {
      color: #6c757d;
      opacity: 1;
    }
    
    .form-control:-ms-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }
    
    .form-control::-ms-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }
    
    .form-control::placeholder {
      color: #6c757d;
      opacity: 1;
    }
    
    .form-control:disabled, .form-control[readonly] {
      background-color: #e9ecef;
      opacity: 1;
    }
    
    select.form-control:focus::-ms-value {
      color: #495057;
      background-color: #fff;
    }
    
    .form-control-file,
    .form-control-range {
      display: block;
      width: 100%;
    }
    
    .col-form-label {
      padding-top: calc(0.375rem + 1px);
      padding-bottom: calc(0.375rem + 1px);
      margin-bottom: 0;
      font-size: inherit;
      line-height: 1.5;
    }
    
    .col-form-label-lg {
      padding-top: calc(0.5rem + 1px);
      padding-bottom: calc(0.5rem + 1px);
      font-size: 1.25rem;
      line-height: 1.5;
    }
    
    .col-form-label-sm {
      padding-top: calc(0.25rem + 1px);
      padding-bottom: calc(0.25rem + 1px);
      font-size: 0.875rem;
      line-height: 1.5;
    }
    
    .form-control-plaintext {
      display: block;
      width: 100%;
      padding-top: 0.375rem;
      padding-bottom: 0.375rem;
      margin-bottom: 0;
      line-height: 1.5;
      color: #212529;
      background-color: transparent;
      border: solid transparent;
      border-width: 1px 0;
    }
    
    .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
      padding-right: 0;
      padding-left: 0;
    }
    
    .form-control-sm {
      height: calc(1.5em + 0.5rem + 2px);
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.2rem;
    }
    
    .form-control-lg {
      height: calc(1.5em + 1rem + 2px);
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0.3rem;
    }
    
    select.form-control[size], select.form-control[multiple] {
      height: auto;
    }
    
    textarea.form-control {
      height: auto;
    }
    
    .form-group {
      margin-bottom: 1rem;
    }
    
    .form-text {
      display: block;
      margin-top: 0.25rem;
    }
    
    .form-row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -5px;
      margin-left: -5px;
    }
    
    .form-row > .col,
    .form-row > [class*="col-"] {
      padding-right: 5px;
      padding-left: 5px;
    }
    
    .form-check {
      position: relative;
      display: block;
      padding-left: 1.25rem;
    }
    
    .form-check-input {
      position: absolute;
      margin-top: 0.3rem;
      margin-left: -1.25rem;
    }
    
    .form-check-input:disabled ~ .form-check-label {
      color: #6c757d;
    }
    
    .form-check-label {
      margin-bottom: 0;
    }
    
    .form-check-inline {
      display: -ms-inline-flexbox;
      display: inline-flex;
      -ms-flex-align: center;
      align-items: center;
      padding-left: 0;
      margin-right: 0.75rem;
    }
    
    .form-check-inline .form-check-input {
      position: static;
      margin-top: 0;
      margin-right: 0.3125rem;
      margin-left: 0;
    }

    .tbx{
      height: 150px;
    }

    .offset-1 {
      margin-left: 8.333333%;
    }
    
    .offset-2 {
      margin-left: 16.666667%;
    }
    
    .offset-3 {
      margin-left: 25%;
    }
    
    .offset-4 {
      margin-left: 33.333333%;
    }
    
    .offset-5 {
      margin-left: 41.666667%;
    }
    
    .offset-6 {
      margin-left: 50%;
    }
    
    .offset-7 {
      margin-left: 58.333333%;
    }
    
    .offset-8 {
      margin-left: 66.666667%;
    }
    
    .offset-9 {
      margin-left: 75%;
    }
    
    .offset-10 {
      margin-left: 83.333333%;
    }
    
    .offset-11 {
      margin-left: 91.666667%;
    }
</style>