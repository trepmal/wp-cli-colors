Feature: Show colors

  Scenario: Show colors
    Given a WP install

    When I run `wp colors`
    Then STDOUT should contain:
      """
      %y : ['color' => 'yellow'] : Lorem ipsum
      """
