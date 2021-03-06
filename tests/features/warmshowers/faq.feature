#language:en
Feature: Use the FAQ page
  In order to find answers to common questions about Warmshowers
  As an authenticated or unauthenticated user 
  I can access content on the FAQ page

Background:
  Given I am on the FAQ page

@nav
Scenario: View answers
  And my chosen question is collapsed
  When I click on the link for my question
  Then I should see the answer text expanded below the question link

@nav
Scenario: Close expanded answers
  And a question is in expanded form
  When I click on the question link of the expanded item
  Then I should see the item return to collapsed form
