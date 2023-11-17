<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP CMD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper-1.14.7.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>
  </head>
  <body>

    <center>
    </br>
    <h3>Operating System</h3>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".os-release">/etc/os-release</button>
    <div class="modal fade os-release" tabindex="-1" role="dialog" aria-labelledby="os-release" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">/etc/os-release</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "cat /etc/os-release";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".installed">installed</button>
    <div class="modal fade installed" tabindex="-1" role="dialog" aria-labelledby="installed" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">installed</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          // check to see if curl is installed
          exec('command -v curl', $curl, $curl_status);

          if ($curl_status == 0) {
            echo "&nbsp;<font color='green'>" . $curl[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>curl not found.</font></br>";
          }
          // check to see if vnstat is installed
          exec('command -v vnstat', $vnstat, $vnstat_status);

          if ($vnstat_status == 0) {
            echo "&nbsp;<font color='green'>" . $vnstat[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>vnstat not found.</font></br>";
          }
          // check to see if tcpdump is installed
          exec('command -v tcpdump', $tcpdump, $tcpdump_status);

          if ($tcpdump_status == 0) {
            echo "&nbsp;<font color='green'>" . $tcpdump[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>tcpdump not found.</font></br>";
          }
          // check to see if lshw is installed
          exec('command -v lshw', $lshw, $lshw_status);

          if ($lshw_status == 0) {
            echo "&nbsp;<font color='green'>" . $lshw[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lshw not found.</font></br>";
          }
          // check to see if lscpu is installed
          exec('command -v lscpu', $lscpu, $lscpu_status);

          if ($lscpu_status == 0) {
            echo "&nbsp;<font color='green'>" . $lscpu[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lscpu not found.</font></br>";
          }
          // check to see if lsblk is installed
          exec('command -v lsblk', $lsblk, $lsblk_status);

          if ($lsblk_status == 0) {
            echo "&nbsp;<font color='green'>" . $lsblk[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lsblk not found.</font></br>";
          }
          // check to see if lsusb is installed
          exec('command -v lsusb', $lsusb, $lsusb_status);

          if ($lsusb_status == 0) {
            echo "&nbsp;<font color='green'>" . $lsusb[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lsusb not found.</font></br>";
          }
          // check to see if lspci is installed
          exec('command -v lspci', $lspci, $lspci_status);

          if ($lspci_status == 0) {
            echo "&nbsp;<font color='green'>" . $lspci[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lspci not found.</font></br>";
          }
          // check to see if lsscsi is installed
          exec('command -v lsscsi', $lsscsi, $lsscsi_status);

          if ($lsscsi_status == 0) {
            echo "&nbsp;<font color='green'>" . $lsscsi[0] . "</font> is installed</br>";
          } else {
            echo "&nbsp;<font color='red'>lsscsi not found.</font></br>";
          }
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    </br></br>
    <h3>Network</h3>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".ifconfig">ifconfig</button>
    <div class="modal fade ifconfig" tabindex="-1" role="dialog" aria-labelledby="ifconfig" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">ifconfig</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "ifconfig";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".dig_ip_address">dig ip address</button>
    <div class="modal fade dig_ip_address" tabindex="-1" role="dialog" aria-labelledby="dig_ip_address" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">dig ip address</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "dig +short myip.opendns.com @resolver1.opendns.com";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".curl_isp">curl ISP</button>
    <div class="modal fade curl_isp" tabindex="-1" role="dialog" aria-labelledby="curl_isp" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">curl ISP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "curl -s ipinfo.io/org";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".vnstat">vnstat</button>
    <div class="modal fade vnstat" tabindex="-1" role="dialog" aria-labelledby="vnstat" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">vnstat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "vnstat";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".netstat_lntu">netstat -lntu</button>
    <div class="modal fade netstat_lntu" tabindex="-1" role="dialog" aria-labelledby="netstat_lntu" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">netstat -lntu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "netstat -lntu";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    </br></br>
    <h3>Hardware</h3>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lshw">lshw</button>
    <div class="modal fade lshw" tabindex="-1" role="dialog" aria-labelledby="lshw" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lshw</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lshw";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lscpu">lscpu</button>
    <div class="modal fade lscpu" tabindex="-1" role="dialog" aria-labelledby="lscpu" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lscpu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lscpu";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lsblk">lsblk</button>
    <div class="modal fade lsblk" tabindex="-1" role="dialog" aria-labelledby="lsblk" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lsblk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lsblk";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lsusb">lsusb</button>
    <div class="modal fade lsusb" tabindex="-1" role="dialog" aria-labelledby="lsusb" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lsusb</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lsusb";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lspci">lspci</button>
    <div class="modal fade lspci" tabindex="-1" role="dialog" aria-labelledby="lspci" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lspci</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lspci";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".lsscsi_s">lsscsi -s</button>
    <div class="modal fade lsscsi_s" tabindex="-1" role="dialog" aria-labelledby="lsscsi_s" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" align="left">
          <div class="modal-header">
            <h5 class="modal-title">lsscsi -s</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php 
          $cmd = "lsscsi -s";
          echo '<pre>';
          passthru($cmd);
          echo '</pre>';
          ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    </center>
  </body>
</html>