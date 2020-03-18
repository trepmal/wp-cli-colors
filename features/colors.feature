Feature: Show colors

  Scenario: Show colors
    Given a WP install

    When I run `wp colors`
    Then STDOUT should contain:
      """
      %y [ yellow ] The quick brown fox jumps over the lazy dog
      """
