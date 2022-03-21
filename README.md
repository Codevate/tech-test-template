# Codevate tech test

Approach this test as you would undertake a client project, completing to a high standard while making efficient use of your time.
We want to see how you would work on a day-to-day basis.

To save time on initial set-up, we've provided this project template and Docker environment.

Make a note of any design decisions, problems, or assumptions that you have made.
We can then go through these in the interview.

Once finished, push your solution to a private Github repository, then invite `DavidBennettUK` and `SamJonesUK`.
To keep the test fair for all, do not publish it publicly.

## The test

Create a simple web app allowing users to send a message via SMS to a mobile number, with the help of Twilio.

It should also be possible to see a history of all messages ever sent, along with their status (e.g. queued, sent, failed).

A basic React front-end should be developed, communicating with Symfony via an API.
Nothing fancy here is required, take a functionality-first approach.

### Functional Requirements

- [ ] Be able to input a valid mobile number and short message (under 100 characters) and press send - sending the message via Twilio.
- [ ] After pressing send, show a card with the message and its status. It should be possible to send multiple messages, showing a list of these cards.
- [ ] It should also be possible to send a message via a [console command](https://symfony.com/doc/current/console.html), with the same restrictions as via front-end.
- [ ] Have a list of all messages ever sent, with their status and dates.

Bonus (optional):

- [ ] If a message is still queued and hasn't been sent yet, provide a cancel button.

### Non-functional requirements

- [ ] Messages should be saved to the database.
- [ ] Messages should be sent asynchronously via a job queue, outside the request. For example, with [Symfony Messenger](https://symfony.com/doc/current/messenger.html).
- [ ] After sending a message via Twilio, its status can change - this needs to be kept track of.
- [ ] Message cards on the front-end should update their status in real-time. For example, with [Mercure](https://symfony.com/doc/current/mercure.html) which is already included in the Docker environment.
- [ ] A user should be rate-limited, only able to send up to 3 messages per minute.
- [ ] To prevent API throttling, the back-end should not send more than 1 request to Twilio per second.
- [ ] We should be able to easily set up and test your project, provide a README.
- [ ] Message consumers should be fault-tolerant. For example, it shouldn't be possible to send the same SMS twice.
- [ ] Ensure communication with Twilio is secure.

### Design considerations

- [ ] So we get a feel of how you think, use good architecture and abstraction. Treat it like a long term project that you'll have to maintain.
- [ ] In the future, we may want to add additional SMS sender implementations other than Twilio.
- [ ] Code quality should be consistent and to a high standard. Linters have been provided for static analysis.
- [ ] Use the latest PHP features, where appropriate, to show you keep your knowledge up to date.
- [ ] Show evidence of progress via Git version history, as you usually would.
- [ ] Consider that the message history could have thousands of entries.
- [ ] Keep in mind that its possible the app could be scaled across multiple servers in production.

### What we're looking for

- High standards - we take pride in our work and would want anyone joining the team to as well.
- Long-term vision - be able to write maintainable and extensible code that you and others will have to revisit in the future.
- Ability to research and pick up new technologies - we're always learning on the job and introducing new things.

### Notes

For testing, Twilio provides a free [trial account](https://www.twilio.com/try-twilio).
This account can only send messages to the mobile number you sign up with.

If webhooks are used, [ngrok](https://ngrok.com/) may come in handy.

## Getting started

To help get you started quickly without spending time on setting a project and environment from scratch, this template has been provided.

This project includes:

- [Symfony project skeleton](https://symfony.com/doc/current/setup.html) - includes only the necessary components to get a project running, feel free to add more as required.
- [Docker environment](https://github.com/dunglas/symfony-docker) - using the official template. Has additional components, such as a Postgres database and Mercure hub, managed via Symfony Flex.
- [Makefile](Makefile) - for convenience running common tasks. Run `make help` to see all commands.
- [React front-end](assets/app) - basic Typescript React app with [react-router](https://reactrouter.com/) and [react-bootstrap](https://react-bootstrap.github.io/), feel free to modify as much as needed. Build system all set up with [Symfony Encore](https://symfony.com/doc/current/frontend/encore/installation.html).
- [PHPStan](https://phpstan.org/) - 
- [ESLint](https://eslint.org/)

If you see any issues with the template project, or things that could be improved, feel free to fix them.
There may even be a few things left on purpose!

### Pre-requisites

You'll need the following installed:

- [Docker](https://docs.docker.com/desktop/)
- [Node.js](https://nodejs.org/en/download/)
- [yarn](https://classic.yarnpkg.com/lang/en/docs/install)

### Front-end

1. Install dependencies with `yarn install`
2. Build and watch for code changes `make js_watch` (stop with ctrl + c)

Lint with `make lint_js`.

### Back-end

1. Build Docker images with `make build`
2. Start Docker with `make up`
3. Install dependencies with `make composer -c=install`
4. Visit `https://localhost` and accept the self-signed certificate
5. Stop Docker with `make down`

Lint with `make lint_php`
