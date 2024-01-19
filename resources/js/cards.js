fetch('data/data.json')
            .then(response => response.json())
            .then(data => {
                // Get the project list container
                const projectList = document.getElementById('projectList');

                // Loop through the data and create list items
                data.projects.forEach(project => {
                    const listItem = document.createElement('li');
                    listItem.classList.add('project-list-item');

                    // Create an image element
                    const img = document.createElement('img');
                    img.src = project.image;
                    img.alt = project.title;
                    img.classList.add('project-img');
                    listItem.appendChild(img);

                    // Create a heading element for the project title
                    const title = document.createElement('h3');
                    title.classList.add('project-title');
                    title.textContent = project.title;
                    listItem.appendChild(title);

                    // Create a link and button element
                    const link = document.createElement('a');
                    link.href = project.link;

                    const button = document.createElement('button');
                    button.classList.add('project-button');
                    button.textContent = 'Learn More';

                    link.appendChild(button);
                    listItem.appendChild(link);

                    // Append the list item to the project list
                    projectList.appendChild(listItem);
                });
            })
            .catch(error => console.error('Error fetching data:', error));