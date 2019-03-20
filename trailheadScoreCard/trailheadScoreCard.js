import {
    LightningElement,
    api
} from 'lwc';

export default class TrailheadScoreCard extends LightningElement {
    @api t_username = 'TEST';
    get trailScoreCardLink() {
        return 'https://api-superqbit.herokuapp.com/getTrailheadCard/' + this.t_username;
    }
}
