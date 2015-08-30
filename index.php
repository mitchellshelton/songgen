<?php

  // Load the progression class
  include_once("progression.class");

  $key = array();
  $key['note'] = 'C';
  $key['quality'] = 'Major';
  $length = 4;
  // Get a progression
  $progression = new Progression($key, $length);

  $output = '';
  $output .= 'Key: ' . $progression->progression['properties']['key']['note'] . ' ' . $progression->progression['properties']['key']['quality'] . '<br />';
  $output .= 'Length: ' . $progression->progression['properties']['length'] . '<br /><br />';

  for ($i = 0; $i < count($progression->progression['progression']); $i++) {
    $current_step = $i + 1;
    $output .= '<strong>Step ' . $current_step . '</strong> <br />Chord:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $progression->progression['progression'][$i] . ' ( ' .
      $progression->progression['properties']['chords'][$i][0] . ' ' .
      $progression->progression['properties']['chords'][$i][1] . ' ' .
      $progression->progression['properties']['chords'][$i][2]
    . ')<br /><br />';
  }

  print $output;

  // Load the drums class
  include_once("drums.class");
  // Get the drum patterns
  $drum = new Drums();
  // Load the drum patterns object into a variable
  $drum_patterns = $drum->patterns;
  // Select a drum pattern
  $drum_pattern = $drum_patterns[0];

  print('<pre>');
  print_r($drum_pattern);
  print('</pre>');
     
  // Load the bass class
  include_once("bass.class");
  // Get the bassline by passing in the chord progression and selected drum pattern
  $bass = new Bass($progression, $drum_pattern);
  // Load the bass line into a variable
  $bassline = $bass->bassline;

// Drums

// Bass
// Melody
// Backing

?>


