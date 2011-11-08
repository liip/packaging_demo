$configure = array(
    'packagename' => 'packaging-demo',
    'version' => '1.2',
    'maintainer' => 'Sylvain Fankhauser <sylvain.fankhauser@liip.ch>',
    'description' => 'Installs the packaging-demo website',
    'url' => '',
    'packagetype' => 'deb',
    'depends' => array(
        'apache2',
        'libapache2-mod-php5',
        // M4 is used to template some files, see postinst
        'm4',
    ),

    'tmpdir' => '/tmp',
    'templatedir' => 'packaging_files/templates',
    'postinst' => 'packaging_files/templates/postinst',
    'preinst' => '',
    'postrm' => '',
    'prerm' => 'packaging_files/templates/prerm',
);

/* here you can define which files or directories should go where in the target system.
 * You can use placeholders defined in your $configure array
 * The syntax is dest => src so you don't have to repeat dest if you have lots
 * of stuff to put in the same directory
 *
 * Example:
 *
 * $filemapping = array(
 *   'var/www/@PACKAGENAME@' => array(
 *      'app/',
 *   )
 * )
 */
$filemapping = array(
    // We carefully omit some dirs like the `doc` and `packaging_files`, that
    // should not end up on the final website
    'var/www/@PACKAGENAME@' => array(
        '*',
        '- /doc',
        '- /packaging_files',
    ),
    // These templated files are copied to a temporary directory because they'll
    // need some post-processing done by postinst
    'etc/packaged-site/@PACKAGENAME@' => array(
        // This file is post-processed in postinst to add the servername
        'packaging_files/templates/apache2.conf',
        // This file is used as a template file that holds environment-dependent
        // information
        'packaging_files/config.$(ENV).m4',
    ),
);
