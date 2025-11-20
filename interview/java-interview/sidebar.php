<?php
// Include config first to get helper functions
require_once  '../../includes/config.php';

$base_url = get_base_url();
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<div class="container-fluid">
<div class="row">
<aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
<div class="sticky-top pt-3 sticky-sidebar">
<div class="sidebar-content px-3">
<h5 class="sidebar-title mb-3"><i class="bi bi-journal-code"></i> Java Interview</h5>

<!-- Core Java Fundamentals -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Core Java Fundamentals</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'java-core') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/">
      <i class="bi bi-lightbulb"></i> Java Interview Guide
    </a>
    
    <a class="nav-link <?= ($current_page == 'java-compiler') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/java-compiler">
      <i class="bi bi-code-square"></i> Online Compiler
    </a>

    <a class="nav-link <?= ($current_page == 'jvm-jre-jdk') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/jvm-jre-jdk">
      <i class="bi bi-cpu"></i> JVM, JRE, JDK
    </a>

    <a class="nav-link <?= ($current_page == 'data-types') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/data-types">
      <i class="bi bi-list-check"></i> Data Types & Variables
    </a>

    <a class="nav-link <?= ($current_page == 'control-flow') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/control-flow">
      <i class="bi bi-diagram-3"></i> Control Flow
    </a>

    <a class="nav-link <?= ($current_page == 'arrays-strings') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/arrays-strings">
      <i class="bi bi-braces"></i> Arrays & Strings
    </a>

    <a class="nav-link <?= ($current_page == 'string-handling') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/string-handling">
      <i class="bi bi-type"></i> String vs StringBuilder vs StringBuffer
    </a>

    <a class="nav-link <?= ($current_page == 'java-memory-model') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/java-memory-model">
      <i class="bi bi-memory"></i> Java Memory Model
    </a>

  </nav>
</div>


<!-- OOP Concepts -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">OOP Concepts</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'class-object') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/class-object">
      <i class="bi bi-box"></i> Class & Object
    </a>

    <a class="nav-link <?= ($current_page == 'inheritance') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/inheritance">
      <i class="bi bi-diagram-2"></i> Inheritance
    </a>

    <a class="nav-link <?= ($current_page == 'polymorphism') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/polymorphism">
      <i class="bi bi-shuffle"></i> Polymorphism
    </a>

    <a class="nav-link <?= ($current_page == 'encapsulation') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/encapsulation">
      <i class="bi bi-lock"></i> Encapsulation
    </a>

    <a class="nav-link <?= ($current_page == 'abstraction') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/abstraction">
      <i class="bi bi-layers"></i> Abstraction
    </a>

    <a class="nav-link <?= ($current_page == 'interfaces-abstract') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/interfaces-vs-abstract">
      <i class="bi bi-diagram-3"></i> Interfaces vs Abstract Classes
    </a>

    <a class="nav-link <?= ($current_page == 'composition-aggregation') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/composition-aggregation">
      <i class="bi bi-diagram-3-fill"></i> Composition vs Aggregation
    </a>

    <a class="nav-link <?= ($current_page == 'overloading-overriding') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/method-overloading-overriding">
      <i class="bi bi-arrow-left-right"></i> Method Overloading & Overriding
    </a>

  </nav>
</div>


<!-- Exception Handling -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Exception Handling</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'try-catch-finally') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/try-catch-finally">
      <i class="bi bi-shield-check"></i> try / catch / finally
    </a>

    <a class="nav-link <?= ($current_page == 'checked-unchecked') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/checked-unchecked">
      <i class="bi bi-exclamation-triangle"></i> Checked vs Unchecked
    </a>

    <a class="nav-link <?= ($current_page == 'custom-exceptions') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/custom-exceptions">
      <i class="bi bi-wrench"></i> Custom Exceptions
    </a>

    <a class="nav-link <?= ($current_page == 'throw-throws') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/throw-vs-throws">
      <i class="bi bi-arrow-up-right-circle"></i> throw vs throws
    </a>

    <a class="nav-link <?= ($current_page == 'common-exceptions') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/common-exceptions">
      <i class="bi bi-bug"></i> Common Exceptions
    </a>

  </nav>
</div>


<!-- Collections Framework -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Collections Framework</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'list-set-map') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/list-set-map">
      <i class="bi bi-collection"></i> List, Set, Map
    </a>

    <a class="nav-link <?= ($current_page == 'arraylist-linkedlist') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/arraylist-vs-linkedlist">
      <i class="bi bi-diagram-2"></i> ArrayList vs LinkedList
    </a>

    <a class="nav-link <?= ($current_page == 'hashset-treeset') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/hashset-vs-treeset">
      <i class="bi bi-tree"></i> HashSet vs TreeSet
    </a>

    <a class="nav-link <?= ($current_page == 'map-types') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/hashmap-linkedhashmap-treemap">
      <i class="bi bi-diagram-3-fill"></i> HashMap vs LinkedHashMap vs TreeMap
    </a>

    <a class="nav-link <?= ($current_page == 'iterator-listiterator') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/iterator-vs-listiterator">
      <i class="bi bi-arrow-clockwise"></i> Iterator vs ListIterator
    </a>

    <a class="nav-link <?= ($current_page == 'concurrent-collections') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/concurrent">
      <i class="bi bi-speedometer"></i> Concurrent Collections
    </a>

    <a class="nav-link <?= ($current_page == 'comparable-comparator') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/comparable-vs-comparator">
      <i class="bi bi-sort-alpha-down"></i> Comparable vs Comparator
    </a>

  </nav>
</div>


<!-- Concurrency & Multithreading -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Concurrency & Multithreading</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'thread-lifecycle') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/thread-lifecycle">
      <i class="bi bi-arrow-repeat"></i> Thread Lifecycle
    </a>

    <a class="nav-link <?= ($current_page == 'runnable-thread') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/runnable-vs-thread">
      <i class="bi bi-play-circle"></i> Runnable vs Thread
    </a>

    <a class="nav-link <?= ($current_page == 'sync-locks') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/synchronization-locks">
      <i class="bi bi-lock-fill"></i> Synchronization & Locks
    </a>

    <a class="nav-link <?= ($current_page == 'volatile-sync-transient') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/volatile-synchronized-transient">
      <i class="bi bi-shield-lock"></i> volatile, synchronized, transient
    </a>

    <a class="nav-link <?= ($current_page == 'executor-framework') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/executor-framework">
      <i class="bi bi-grid-3x3-gap"></i> Executor Framework
    </a>

    <a class="nav-link <?= ($current_page == 'future-callable') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/future-callable">
      <i class="bi bi-hourglass-split"></i> Future & Callable
    </a>

    <a class="nav-link <?= ($current_page == 'thread-pools') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/thread-pools">
      <i class="bi bi-collection-play"></i> Thread Pools
    </a>

    <a class="nav-link <?= ($current_page == 'fork-join') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/fork-join-framework">
      <i class="bi bi-diagram-2"></i> Fork/Join Framework
    </a>

    <a class="nav-link <?= ($current_page == 'atomic-variables') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/atomic-variables">
      <i class="bi bi-dot"></i> Atomic Variables
    </a>

  </nav>
</div>


<!-- Memory & Performance -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Memory & Performance</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'garbage-collection') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/gc">
      <i class="bi bi-recycle"></i> Garbage Collection
    </a>

    <a class="nav-link <?= ($current_page == 'gc-types') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/gc-types">
      <i class="bi bi-activity"></i> GC Types (G1, ZGC, CMS)
    </a>

    <a class="nav-link <?= ($current_page == 'memory-leaks') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/memory-leaks">
      <i class="bi bi-bug-fill"></i> Memory Leaks
    </a>

    <a class="nav-link <?= ($current_page == 'class-loading') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/class-loading">
      <i class="bi bi-box-arrow-in-down"></i> Class Loading
    </a>

    <a class="nav-link <?= ($current_page == 'references') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/references">
      <i class="bi bi-diagram-3"></i> References (Soft, Weak, Phantom)
    </a>

  </nav>
</div>


<!-- Java 8+ Features -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 8+ Features</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'lambda') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/lambda">
      <i class="bi bi-code-slash"></i> Lambda Expressions
    </a>

    <a class="nav-link <?= ($current_page == 'functional-interfaces') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/functional-interfaces">
      <i class="bi bi-diagram-3"></i> Functional Interfaces
    </a>

    <a class="nav-link <?= ($current_page == 'streams') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/streams">
      <i class="bi bi-funnel"></i> Streams API
    </a>

    <a class="nav-link <?= ($current_page == 'optional') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/optional">
      <i class="bi bi-question-circle"></i> Optional
    </a>

    <a class="nav-link <?= ($current_page == 'default-static') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/default-static-methods">
      <i class="bi bi-gear"></i> Default & Static Methods
    </a>

    <a class="nav-link <?= ($current_page == 'method-references') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/method-references">
      <i class="bi bi-box-arrow-right"></i> Method References
    </a>

    <a class="nav-link <?= ($current_page == 'date-time') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/date-time-api">
      <i class="bi bi-calendar-event"></i> Date & Time API
    </a>

  </nav>
</div>


<!-- File I/O & Serialization -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">File I/O & Serialization</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'file-handling') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/file-handling">
      <i class="bi bi-folder"></i> File Handling
    </a>

    <a class="nav-link <?= ($current_page == 'buffered') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/buffered-reader-writer">
      <i class="bi bi-file-text"></i> BufferedReader / BufferedWriter
    </a>

    <a class="nav-link <?= ($current_page == 'streams-io') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/streams">
      <i class="bi bi-water"></i> Streams
    </a>

    <a class="nav-link <?= ($current_page == 'serialization') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/serialization">
      <i class="bi bi-archive"></i> Serialization
    </a>

    <a class="nav-link <?= ($current_page == 'nio') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/nio">
      <i class="bi bi-lightning"></i> NIO & NIO.2
    </a>

  </nav>
</div>
<!-- Java 9 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 9</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'jshell') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/jshell">
      <i class="bi bi-terminal"></i> JShell (REPL)
    </a>

    <a class="nav-link <?= ($current_page == 'jpms') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/jpms">
      <i class="bi bi-columns"></i> Java Module System (JPMS)
    </a>

    <a class="nav-link <?= ($current_page == 'stream-enhancements') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/streams">
      <i class="bi bi-filter"></i> Stream API Enhancements
    </a>

    <a class="nav-link <?= ($current_page == 'optional-enhancements') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/optional">
      <i class="bi bi-question-lg"></i> Optional Enhancements
    </a>

    <a class="nav-link <?= ($current_page == 'http2-client') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/http2-client">
      <i class="bi bi-wifi"></i> HTTP/2 Client
    </a>

    <a class="nav-link <?= ($current_page == 'multi-release-jar') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/multi-release-jar">
      <i class="bi bi-box-seam"></i> Multi-release JARs
    </a>

  </nav>
</div>



<!-- Java 10 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 10</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'var') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/var">
      <i class="bi bi-type"></i> Local Variable Type Inference (var)
    </a>

    <a class="nav-link <?= ($current_page == 'gc-improvements') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/gc">
      <i class="bi bi-recycle"></i> GC Improvements
    </a>

    <a class="nav-link <?= ($current_page == 'cds') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/cds">
      <i class="bi bi-box-arrow-down"></i> Application Class-Data Sharing
    </a>

  </nav>
</div>



<!-- Java 11 (LTS) -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 11 (LTS)</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'http-client') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/http-client">
      <i class="bi bi-wifi"></i> New HTTP Client API
    </a>

    <a class="nav-link <?= ($current_page == 'string-api') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/string-api">
      <i class="bi bi-card-text"></i> String API Enhancements
    </a>

    <a class="nav-link <?= ($current_page == 'lambda-var') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/lambda-var">
      <i class="bi bi-braces-asterisk"></i> var in Lambda
    </a>

    <a class="nav-link <?= ($current_page == 'remove-javaee') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/remove-javaee">
      <i class="bi bi-trash"></i> Removal of Java EE Modules
    </a>

  </nav>
</div>



<!-- Java 12 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 12</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'switch-expressions') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/switch-expressions">
      <i class="bi bi-shuffle"></i> Switch Expressions
    </a>

    <a class="nav-link <?= ($current_page == 'teeing-collector') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/teeing">
      <i class="bi bi-diagram-2"></i> New Collector: teeing
    </a>

  </nav>
</div>



<!-- Java 13 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 13</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'text-blocks') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/text-blocks">
      <i class="bi bi-blockquote-left"></i> Text Blocks (Preview)
    </a>

    <a class="nav-link <?= ($current_page == 'socket-rewrite') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/socket">
      <i class="bi bi-plugin"></i> Socket API Rewrite
    </a>

  </nav>
</div>



<!-- Java 14 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 14</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'records-preview') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/records">
      <i class="bi bi-journal-text"></i> Records (Preview)
    </a>

    <a class="nav-link <?= ($current_page == 'pattern-instanceof') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/pattern-matching">
      <i class="bi bi-diagram-3"></i> Pattern Matching for instanceof
    </a>

    <a class="nav-link <?= ($current_page == 'helpful-npe') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/helpful-npe">
      <i class="bi bi-exclamation-octagon"></i> Helpful NullPointerExceptions
    </a>

  </nav>
</div>



<!-- Java 15 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 15</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'sealed-classes') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/sealed-classes">
      <i class="bi bi-shield-lock"></i> Sealed Classes (Preview)
    </a>

    <a class="nav-link <?= ($current_page == 'hidden-classes') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/hidden-classes">
      <i class="bi bi-eye-slash"></i> Hidden Classes
    </a>

    <a class="nav-link <?= ($current_page == 'text-blocks-final') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/text-blocks-final">
      <i class="bi bi-blockquote-left"></i> Text Blocks (Final)
    </a>

  </nav>
</div>



<!-- Java 16 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 16</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'records-final') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/records-final">
      <i class="bi bi-journal-check"></i> Records (Final)
    </a>

    <a class="nav-link <?= ($current_page == 'vector-api') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/vector-api">
      <i class="bi bi-graph-up-arrow"></i> Vector API
    </a>

  </nav>
</div>



<!-- Java 17 (LTS) -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 17 (LTS)</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'sealed-final') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/sealed">
      <i class="bi bi-shield-check"></i> Sealed Classes (Final)
    </a>

    <a class="nav-link <?= ($current_page == 'switch-pattern') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/switch-pattern">
      <i class="bi bi-shuffle"></i> Pattern Matching for Switch
    </a>

    <a class="nav-link <?= ($current_page == 'rng-api') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/random-api">
      <i class="bi bi-dice-5"></i> Enhanced Random Generator API
    </a>

  </nav>
</div>



<!-- Java 18 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 18</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'simple-web-server') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/web-server">
      <i class="bi bi-server"></i> Simple Web Server
    </a>

    <a class="nav-link <?= ($current_page == 'utf8-default') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/utf8">
      <i class="bi bi-type"></i> UTF-8 by Default
    </a>

  </nav>
</div>



<!-- Java 19 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 19</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'virtual-threads-preview') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/virtual-threads">
      <i class="bi bi-thread"></i> Virtual Threads (Preview)
    </a>

    <a class="nav-link <?= ($current_page == 'structured-concurrency') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/structured-concurrency">
      <i class="bi bi-diagram-3-fill"></i> Structured Concurrency
    </a>

    <a class="nav-link <?= ($current_page == 'foreign-function-api') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/ffm">
      <i class="bi bi-cpu"></i> Foreign Function & Memory API
    </a>

  </nav>
</div>



<!-- Java 20 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 20</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'scoped-values') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/scoped-values">
      <i class="bi bi-diagram-3"></i> Scoped Values
    </a>

    <a class="nav-link <?= ($current_page == 'virtual-thread-updates') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/virtual-thread-updates">
      <i class="bi bi-arrow-repeat"></i> Virtual Thread Updates
    </a>

  </nav>
</div>



<!-- Java 21 (LTS) -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 21 (LTS)</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'virtual-threads-final') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/virtual-threads-final">
      <i class="bi bi-lightning"></i> Virtual Threads (Final)
    </a>

    <a class="nav-link <?= ($current_page == 'sequenced-collections') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/sequenced-collections">
      <i class="bi bi-collection"></i> Sequenced Collections
    </a>

    <a class="nav-link <?= ($current_page == 'record-patterns') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/record-patterns">
      <i class="bi bi-braces"></i> Record Patterns
    </a>

    <a class="nav-link <?= ($current_page == 'zgc-gen') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/zgc">
      <i class="bi bi-recycle"></i> Generational ZGC
    </a>

  </nav>
</div>



<!-- Java 22 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 22</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'stream-gatherers') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/gatherers">
      <i class="bi bi-funnel"></i> Stream Gatherers API
    </a>

    <a class="nav-link <?= ($current_page == 'unnamed-patterns') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/unnamed-patterns">
      <i class="bi bi-question"></i> Unnamed Patterns & Variables
    </a>

    <a class="nav-link <?= ($current_page == 'ffm-final') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/ffm-final">
      <i class="bi bi-cpu"></i> FFM API Finalization
    </a>

  </nav>
</div>



<!-- Java 23 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 23</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'string-templates') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/string-templates">
      <i class="bi bi-braces"></i> String Templates (Preview)
    </a>

    <a class="nav-link <?= ($current_page == 'zgc-updates') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/zgc-updates">
      <i class="bi bi-speedometer"></i> ZGC Improvements
    </a>

    <a class="nav-link <?= ($current_page == 'vector-api-update') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/vector-api">
      <i class="bi bi-graph-up"></i> Vector API Updates
    </a>

  </nav>
</div>



<!-- Java 24 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 24</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'encapsulated-collections') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/encapsulated-collections">
      <i class="bi bi-folder-lock"></i> Encapsulated Collections
    </a>

    <a class="nav-link <?= ($current_page == 'pattern-matching-evolution') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/pattern-evolution">
      <i class="bi bi-diagram-3-fill"></i> Pattern Matching Evolution
    </a>

    <a class="nav-link <?= ($current_page == 'jit-gc') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/jit-gc">
      <i class="bi bi-lightning-charge"></i> JIT & GC Improvements
    </a>

  </nav>
</div>



<!-- Java 25 -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Java 25</h6>
  <nav class="nav flex-column">

    <a class="nav-link <?= ($current_page == 'loom-advanced') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/loom-advanced">
      <i class="bi bi-thread"></i> Loom Improvements
    </a>

    <a class="nav-link <?= ($current_page == 'pattern-matching-20') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/pattern-matching-20">
      <i class="bi bi-braces"></i> Pattern Matching 2.0
    </a>

    <a class="nav-link <?= ($current_page == 'native-classfile') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/native-classfile">
      <i class="bi bi-file-binary"></i> Native Classfile Format
    </a>

    <a class="nav-link <?= ($current_page == 'gc-scheduling') ? 'active' : '' ?>" href="<?= $base_url ?>interview/java-interview/gc-scheduling">
      <i class="bi bi-clock-history"></i> GC Scheduling Optimizations
    </a>

  </nav>
</div>


</div>
</div>
</aside>
