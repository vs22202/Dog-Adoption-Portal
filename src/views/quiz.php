<div class="page-card margin-inline-auto">
    <p class="header"> Dog Picker Quiz</p>
    <div class="question-card">
        <form data-quizForm method='post'>
            <div data-quizPage='1'>
                <div class="quiz-container">
                    <h2 id="question"> 1. What type of home/living space do you have?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer" value="a" class="answer" required>
                            <label for="a" id="a_text">It's bigger than a closet, so I call it an apartment</label>
                        </li>

                        <li>
                            <input type="radio" name="answer" value="b" class="answer" required>
                            <label for="b" id="b_text">"Cozy" House</label>
                        </li>

                        <li>
                            <input type="radio" name="answer" value="c" class="answer" required>
                            <label for="c" id="c_text">Large House  </label>
                        </li>                        
                        <li>
                            <input type="radio" name="answer" value="d" class="answer" required>
                            <label for="d" id="d_text">Small Home </label>
                        </li>

                    </ul>
                    <h2 id="question">2. How big is your yard?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer0" value="a" class="answer" required>
                            <label for="a" id="a_text">None—but my NEXT house will have a yard</label>
                        </li>

                        <li>
                            <input type="radio" name="answer0" value="b" class="answer" required>
                            <label for="b" id="b_text">Small</label>
                        </li>

                        <li>
                            <input type="radio" name="answer0" value="c" class="answer" required>
                            <label for="c" id="c_text">Medium (mowing doesn't take all day)</label>
                        </li>
                        <li>
                            <input type="radio" name="answer0" value="d" class="answer" required>
                            <label for="d" id="d_text">Large enough to help me forget I've got neighbors </label>
                        </li>

                    </ul>
                    <h2 id="question">3. For how long will the dog be alone each week?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer1" value="a" class="answer" required>
                            <label for="a" id="a_text">Not at all</label>
                        </li>

                        <li>
                            <input type="radio" name="answer1" value="b" class="answer" required>
                            <label for="b" id="b_text">10-20 hours</label>
                        </li>

                        <li>
                            <input type="radio" name="answer1" value="c" class="answer" required>
                            <label for="c" id="c_text">20-40 hours</label>
                        </li>
                        <li>
                            <input type="radio" name="answer1" value="d" class="answer" required>
                            <label for="d" id="d_text">More than 40 hours</label>       
                        </li>

                    </ul>
                </div>
            </div>
            <div data-quizPage='2' class='display-none'>
                <div class="quiz-container">
                    <h2 id="question"> 4. Do elderly or disabled people stay with you?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer2" value="a" class="answer" required>
                            <label for="a" id="a_text">No</label>
                        </li>

                        <li>
                            <input type="radio" name="answer2" value="b" class="answer" required>
                            <label for="b" id="b_text">Sometimes</label>
                        </li>

                        <li>
                            <input type="radio" name="answer2" value="c" class="answer" required>
                            <label for="c" id="c_text">Often</label>
                        </li>
                        <li>
                            <input type="radio" name="answer2" value="d" class="answer" required>
                            <label for="d" id="d_text">Permanently</label>       
                        </li>

                    </ul>
                    <h2 id="question">5. How energetic should your dog be?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer3" value="a" class="answer" required>
                            <label for="a" id="a_text">"You don't really expect me to fetch that ball, do you?"</label>
                        </li>

                        <li>
                            <input type="radio" name="answer3" value="b" class="answer" required>
                            <label for="b" id="b_text">"Let's play catch—but don't make me run around too much"</label>
                        </li>

                        <li>
                            <input type="radio" name="answer3" value="c" class="answer" required>
                            <label for="c" id="c_text">"This is fun, throw the ball again!"</label>
                        </li>
                        <li>
                            <input type="radio" name="answer3" value="d" class="answer" required>
                            <label for="d" id="d_text">"Why are you stopping? We've only been playing for 3 hours!"</label>       
                        </li>

                    </ul>
                    <h2 id="question">6. How much daily exercise will you give your dog?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer4" value="a" class="answer" required>
                            <label for="a" id="a_text">None, I'm basically a couch potato</label>
                        </li>

                        <li>
                            <input type="radio" name="answer4" value="b" class="answer" required>
                            <label for="b" id="b_text">30 minutes</label>
                        </li>

                        <li>
                            <input type="radio" name="answer4" value="c" class="answer" required>
                            <label for="c" id="c_text">1 hour</label>
                        </li>
                        <li>
                            <input type="radio" name="answer4" value="d" class="answer" required>
                            <label for="d" id="d_text">More than 1 hour</label>       
                        </li>

                    </ul>
                </div>
            </div>
            <div data-quizPage='3' class='display-none'>
                <div class="quiz-container">
                    <h2 id="question"> 7. What size dog are you looking for?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer5" value="a" class="answer" required>
                            <label for="a" id="a_text">Small</label>
                        </li>

                        <li>
                            <input type="radio" name="answer5" value="b" class="answer" required>
                            <label for="b" id="b_text">Medium</label>
                        </li>

                        <li>
                            <input type="radio" name="answer5" value="c" class="answer" required>
                            <label for="c" id="c_text">Large enough for people to say, "Now THAT's a dog!"</label>
                        </li>
                        <li>
                            <input type="radio" name="answer5" value="d" class="answer" required>
                            <label for="d" id="d_text">Giant</label>       
                        </li>

                    </ul>
                    <h2 id="question">8. How much money are you willing to spend each week to feed your dog?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer6" value="a" class="answer" required>
                            <label for="a" id="a_text">800rs</label>
                        </li>

                        <li>
                            <input type="radio" name="answer6" value="b" class="answer" required>
                            <label for="b" id="b_text">2000rs</label>
                        </li>

                        <li>
                            <input type="radio" name="answer6" value="c" class="answer" required>
                            <label for="c" id="c_text">3200rs</label>
                        </li>
                        <li>
                            <input type="radio" name="answer6" value="d" class="answer" required>
                            <label for="d" id="d_text">More than 3200rs</label>       
                        </li>

                    </ul>
                    <h2 id="question">9. How often will your dog be groomed each week?</h2>
                    <ul>
                        <li>
                            <input type="radio" name="answer7" value="a" class="answer" required>
                            <label for="a" id="a_text">None</label>
                        </li>

                        <li>
                            <input type="radio" name="answer7" value="b" class="answer" required>
                            <label for="b" id="b_text">Let's not go overboard, once a week should do it</label>
                        </li>

                        <li>
                            <input type="radio" name="answer7" value="c" class="answer" required>
                            <label for="c" id="c_text">Two or three times a week</label>
                        </li>
                        <li>
                            <input type="radio" name="answer7" value="d" class="answer" required>
                            <label for="d" id="d_text">Every day (I'm a neat freak—and proud of it!)</label>       
                        </li>

                    </ul>
                    <input type="submit" value="Submit Quiz" class='btn primary-900 margin-bottom-1 margin-inline-auto'>
                </div>
            </div>
            <div class="page-count flex ">
                <button id="prev" type="button">PREVIOUS</button>
                <button id="next" type="button">NEXT</button>
            </div>
        </form>
    </div>
</div>
<script>
    let prev=document.querySelector('#prev');
    prev.addEventListener('click',()=>{
    let pages=document.querySelectorAll('[data-quizPage]');
    let pageNum;
    if(next.getAttribute('disabled')){
            next.removeAttribute('disabled');
        }
    pages.forEach((page)=>{
        if(page.classList && !page.classList.contains('display-none')){
            pageNum=page.getAttribute('data-quizPage');
            if (pageNum>1) {
                page.classList.add('display-none');
            }
            else{
                prev.setAttribute('disabled','true');
            }
            console.log(pageNum);
        }
        else{
            return;
        }
    });
    if (pageNum>1) {
            document.querySelector(`[data-quizPage='${--pageNum}']`).classList.remove('display-none');
        }
    else{
            prev.setAttribute('disabled','true');
        }
    })
    let next=document.querySelector('#next');
    next.addEventListener('click',()=>{
        let pages=document.querySelectorAll('[data-quizPage]');
        let pageNum;
        if(prev.getAttribute('disabled')){
            prev.removeAttribute('disabled');
        }
        pages.forEach((page)=>{
            if(page.classList && !page.classList.contains('display-none')){
                pageNum=page.getAttribute('data-quizPage');
                if (pageNum<3) {
                    page.classList.add('display-none');
                }
                else{
                    next.setAttribute('disabled','true');
                }
                console.log(pageNum);
            }
            else{
                return;
            }
        });
        if (pageNum<3) {
                document.querySelector(`[data-quizPage='${++pageNum}']`).classList.remove('display-none');
            }
        else{
                next.setAttribute('disabled','true');
            }
    })
</script>