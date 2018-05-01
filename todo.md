## To-Do List

- Priority 1: High
- Priority 2: Medium
- Priority 3: Low

### Project

- Update to correct data types (P1)
- Add ability to edit project details (P2)
	- EditInPlace? (P3)
- Link users to a project (P3?)


### Panel

- Update to correct data types (P1)
- Add form options to record allowed countries (P1)
- Add ability to edit project details (P2)
	- EditInPlace? (P3)
- Add redirect from project link with custom URL variable (P1)
	- Set this custom URL variable at panel creation stage?

### Required tables

- Countries table (P1)
	- Each panel may have many allowed countries
- Respondents table (P1)
	- Each panel may have many respondents

### Respondent Checks

- Needs to create respondent in a respondents table with
	- Basic fingerprinting ID/IP (P1)
	- More indepth fingerprinting Browser/Cookie (P3)
- Each new respondent will be checked against existing respondents to discourage duplicates (P1)
- Check country against allowed countries
	- Select2 for forms?
- Add the ability to limit survey to certain devices/os
	- Perhaps as a part of creating a panel
	- mobiledetect.net

### Email notifications

- Email linked users when project is created/updated/marked complete (P3)
- Email owner of project if a high frequency of errors/screenouts/quotafulls (P3)
	- How will this be calculated?
- Email owner of a project when total sum of all respondents marked as complete, for all panels linked to a project is equal to the total completes set on project

