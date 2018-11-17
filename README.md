# VShout

A platform for crowdsourcing participants for volunteering events. This is targeted at NGOs and small scale volunteer organizations to use in order to find volunteers for their projects (such as beach cleanups, awareness walks etc.).

## Getting Started

### Prerequisites

This project requires the following to be setup,

* Composer
* mySQL

### Installing

These instructions are for a quick setup using XAMPP server

1. Clone the repository into the ```htdocs``` directory
2. Navigate to the project directory ```cd vshout```
3. Open a command window and run ```composer update```
4. Update ```httpd-vhosts.conf``` located in ```xampp\apache\conf\extra``` to include the following,

```
<VirtualHost vshout.test:80>
  DocumentRoot "C:\xampp\htdocs\vshout\public"
  ServerAdmin vshout.test
  <Directory "C:\xampp\htdocs\vshout">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>
```
5. Edit the ```hosts``` file located in ```C:\Windows\System32\drivers\etc``` to include the following,

```
# localhost name resolution is handled within DNS itself.
#	127.0.0.1       localhost
#	::1             localhost

127.0.0.1	vshout.test
```

6. Launch Apache using XAMPP server
7. Navigate to ```vshout.test```
