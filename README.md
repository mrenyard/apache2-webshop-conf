Apache2 WebShop Configuration
=============================

Apache2 WebShop Configuration. Optimized webserver setup.
 Includes such features as:
 - Maximised Concurent Server Connections
 - Development Mode Switching
     including specialist scratch files (css/html)
     firePHP output as standard
 - Live Server Performance Advancements
 - with PhpDocumentor and PHPUnit

Part of:

        <h1>
          WebShop<sup><abbr title="Trade Mark">TM</abbr></sup>&nbsp;Pro (Beta&nbsp;v0.1)
        </h1>
        <h2>Feature List</h2>


          <h2>Maximised Concurent Server&nbsp;Connections</h2>
          <p>
          All browsers set a maximun concurent connections limit (at varying levels),
          following <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec8.html#sec8.1.4"
          >Section&nbsp;8.1.4 of the HTTP/1.1&nbsp;RFC</a>. By <q cite=
          "http://www.stevesouders.com/blog/2008/03/20/roundup-on-parallel-connections/#more-9"
          >using multiple domain names, such as [style].mydomain.com, [func].mydomain.com,
          [media].mydomain.com, etc., &hellip;[it]&hellip; allows &hellip;[us]&hellip; to
          achieve a multiple of the per server connection limit.</q> (<a href=
          "http://www.stevesouders.com/">Steve&nbsp;Souders</a>).
          </p>
          <p>
          This also alows us to optimize each sub-domain for its particular job and is used
          extensivaly in many of the subsaquantly mentiond&nbsp;features.
          </p>

          <h2>
            Development&nbsp;Mode Switching
          </h2>
          <p>
            By using a <em>dev.</em> sub-domain we can switch between differant views of
            the same live website, automaticaly toggaling between debuging features and
            optimized performance. Working in this way also enables us to layer improvments
            onto the live site without interfering with its current state until each
            change&nbsp;is&nbsp;vetted.
          </p>
          <ol>
            <li>
              <h3>Scratch List</h3>
              <p>
                The Scratch List file (<em>list.scratch</em>) is provided as the
                place to list all current Scratch Template and Scratch CSS files and is
                the default root view when in Development Mode. This gives one easy
                stating point from which developers can record, and clients view,
                evolving ideas for the sites development.
              </p>
            </li>
            <li>
              <h3>Scratch Template Files</h3>
              <p>
                Scratch Template Files (files with a <em>.scratch</em> extension)
                provid an effective method for testing new markup alone side all the
                other website paraphenalia (i.e. its style and function), whilst being
                inacccesible through the live site.
              </p>
            </li>
            <li>
              <h3>Needs Rebuild Warning Notification</h3>
              <p>
                If changes have been made that effect the live site without building
              </p>
            </li>
            <li>&hellip;</li>
          </ol>
