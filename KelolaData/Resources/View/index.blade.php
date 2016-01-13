@extends("JakoyTemplate::TemplateKelolaData.main-template")
@section("konten")
<div class="col s12 m12 l12">
                          <ul id="task-card" class="collection with-header">
                              <li class="collection-header cyan">
                                  <h4 class="task-card-title">Target</h4>
                                  <p class="task-card-date">Januari 13, 2015</p>
                              </li>
                              <li class="collection-item dismissable">
                                  <input type="checkbox" id="task1" />
                                  <label for="task1">Kerjakan Laravel. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                                  </label>
                                  <span class="task-cat teal">Aplikasi Dakwah Laravel</span>
                              </li>
                              <li class="collection-item dismissable">
                                  <input type="checkbox" id="task2" />
                                  <label for="task2">Kerjakan Web Enterprise <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                                  </label>
                                  <span class="task-cat purple">APlikasi Kartu Keluarga</span>
                              </li>
                              <li class="collection-item dismissable">
                                  <input type="checkbox" id="task3" checked="checked" />
                                  <label for="task3">Mock Up Aplikasi <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                                  </label>
                                  <span class="task-cat pink">Rancangan Mockup Aplikasi</span>
                              </li>
                        
                              
                            
                          </ul>
                      </div>

@stop